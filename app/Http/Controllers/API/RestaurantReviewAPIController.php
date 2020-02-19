<?php

namespace App\Http\Controllers\API;


use App\Models\RestaurantReview;
use App\Repositories\RestaurantReviewRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\Response;
use Prettus\Repository\Exceptions\RepositoryException;
use Flash;

/**
 * Class RestaurantReviewController
 * @package App\Http\Controllers\API
 */

class RestaurantReviewAPIController extends Controller
{
    /** @var  RestaurantReviewRepository */
    private $restaurantReviewRepository;

    public function __construct(RestaurantReviewRepository $restaurantReviewRepo)
    {
        $this->restaurantReviewRepository = $restaurantReviewRepo;
    }

    /**
     * Display a listing of the RestaurantReview.
     * GET|HEAD /restaurantReviews
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try{
            $this->restaurantReviewRepository->pushCriteria(new RequestCriteria($request));
            $this->restaurantReviewRepository->pushCriteria(new LimitOffsetCriteria($request));
        } catch (RepositoryException $e) {
            Flash::error($e->getMessage());
        }
        $restaurantReviews = $this->restaurantReviewRepository->all();

        return $this->sendResponse($restaurantReviews->toArray(), 'Restaurant Reviews retrieved successfully');
    }

    /**
     * Display the specified RestaurantReview.
     * GET|HEAD /restaurantReviews/{id}
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        /** @var RestaurantReview $restaurantReview */
        if (!empty($this->restaurantReviewRepository)) {
            $restaurantReview = $this->restaurantReviewRepository->findWithoutFail($id);
        }

        if (empty($restaurantReview)) {
            return $this->sendError('Restaurant Review not found');
        }

        return $this->sendResponse($restaurantReview->toArray(), 'Restaurant Review retrieved successfully');
    }
}
