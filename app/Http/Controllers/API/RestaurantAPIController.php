<?php

namespace App\Http\Controllers\API;


use App\Models\Restaurant;
use App\Repositories\RestaurantRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\Response;
use Prettus\Repository\Exceptions\RepositoryException;
use Flash;

/**
 * Class RestaurantController
 * @package App\Http\Controllers\API
 */

class RestaurantAPIController extends Controller
{
    /** @var  RestaurantRepository */
    private $restaurantRepository;

    public function __construct(RestaurantRepository $restaurantRepo)
    {
        $this->restaurantRepository = $restaurantRepo;
    }

    /**
     * Display a listing of the Restaurant.
     * GET|HEAD /restaurants
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try{
            $this->restaurantRepository->pushCriteria(new RequestCriteria($request));
            $this->restaurantRepository->pushCriteria(new LimitOffsetCriteria($request));
        } catch (RepositoryException $e) {
            Flash::error($e->getMessage());
        }
        $inputs = $request->all();
        if($request->has(['myLon','myLat','areaLon','areaLat'])){
            $restaurants = $this->restaurantRepository->near($inputs['myLon'],$inputs['myLat'],$inputs['areaLon'],$inputs['areaLat']);
        }else{
            $restaurants = $this->restaurantRepository->all();
        }

        return $this->sendResponse($restaurants->toArray(), 'Restaurants retrieved successfully');
    }

    /**
     * Display the specified Restaurant.
     * GET|HEAD /restaurants/{id}
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request, $id)
    {
        /** @var Restaurant $restaurant */
        if (!empty($this->restaurantRepository)) {
            try{
                $this->restaurantRepository->pushCriteria(new RequestCriteria($request));
                $this->restaurantRepository->pushCriteria(new LimitOffsetCriteria($request));
            } catch (RepositoryException $e) {
                Flash::error($e->getMessage());
            }
            $restaurant = $this->restaurantRepository->findWithoutFail($id);
        }

        if (empty($restaurant)) {
            return $this->sendError('Restaurant not found');
        }

        return $this->sendResponse($restaurant->toArray(), 'Restaurant retrieved successfully');
    }
}
