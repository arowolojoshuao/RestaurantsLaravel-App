<?php

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\Currency;
use App\Repositories\CurrencyRepository;
use Flash;
use Illuminate\Http\Request;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Exceptions\RepositoryException;

/**
 * Class CurrencyController
 * @package App\Http\Controllers\API
 */
class CurrencyAPIController extends Controller
{
    /** @var  CurrencyRepository */
    private $currencyRepository;

    public function __construct(CurrencyRepository $currencyRepo)
    {
        $this->currencyRepository = $currencyRepo;
    }

    /**
     * Display a listing of the Currency.
     * GET|HEAD /currencies
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try {
            $this->currencyRepository->pushCriteria(new RequestCriteria($request));
            $this->currencyRepository->pushCriteria(new LimitOffsetCriteria($request));
        } catch (RepositoryException $e) {
            Flash::error($e->getMessage());
        }
        $currencies = $this->currencyRepository->all();

        return $this->sendResponse($currencies->toArray(), 'Currencies retrieved successfully');
    }

    /**
     * Display the specified Currency.
     * GET|HEAD /currencies/{id}
     *
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        /** @var Currency $currency */
        if (!empty($this->currencyRepository)) {
            $currency = $this->currencyRepository->findWithoutFail($id);
        }

        if (empty($currency)) {
            return $this->sendError('Currency not found');
        }

        return $this->sendResponse($currency->toArray(), 'Currency retrieved successfully');
    }
}
