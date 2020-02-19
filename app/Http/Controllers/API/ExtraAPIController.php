<?php

namespace App\Http\Controllers\API;


use App\Models\Extra;
use App\Repositories\ExtraRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\Response;
use Prettus\Repository\Exceptions\RepositoryException;
use Flash;

/**
 * Class ExtraController
 * @package App\Http\Controllers\API
 */

class ExtraAPIController extends Controller
{
    /** @var  ExtraRepository */
    private $extraRepository;

    public function __construct(ExtraRepository $extraRepo)
    {
        $this->extraRepository = $extraRepo;
    }

    /**
     * Display a listing of the Extra.
     * GET|HEAD /extras
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try{
            $this->extraRepository->pushCriteria(new RequestCriteria($request));
            $this->extraRepository->pushCriteria(new LimitOffsetCriteria($request));
        } catch (RepositoryException $e) {
            Flash::error($e->getMessage());
        }
        $extras = $this->extraRepository->all();

        return $this->sendResponse($extras->toArray(), 'Extras retrieved successfully');
    }

    /**
     * Display the specified Extra.
     * GET|HEAD /extras/{id}
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        /** @var Extra $extra */
        if (!empty($this->extraRepository)) {
            $extra = $this->extraRepository->findWithoutFail($id);
        }

        if (empty($extra)) {
            return $this->sendError('Extra not found');
        }

        return $this->sendResponse($extra->toArray(), 'Extra retrieved successfully');
    }
}
