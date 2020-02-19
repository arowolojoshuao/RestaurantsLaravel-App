<?php

namespace App\Http\Controllers;

use App\DataTables\FoodDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateFoodRequest;
use App\Http\Requests\UpdateFoodRequest;
use App\Repositories\FoodRepository;
use App\Repositories\CustomFieldRepository;
use App\Repositories\UploadRepository;
use App\Repositories\RestaurantRepository;
use App\Repositories\CategoryRepository;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Prettus\Validator\Exceptions\ValidatorException;

class FoodController extends Controller
{
    /** @var  FoodRepository */
    private $foodRepository;

    /**
     * @var CustomFieldRepository
     */
    private $customFieldRepository;

    /**
     * @var UploadRepository
     */
    private $uploadRepository;
    /**
     * @var RestaurantRepository
     */
    private $restaurantRepository;
    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    public function __construct(FoodRepository $foodRepo, CustomFieldRepository $customFieldRepo, UploadRepository $uploadRepo
        , RestaurantRepository $restaurantRepo
        , CategoryRepository $categoryRepo)
    {
        parent::__construct();
        $this->foodRepository = $foodRepo;
        $this->customFieldRepository = $customFieldRepo;
        $this->uploadRepository = $uploadRepo;
        $this->restaurantRepository = $restaurantRepo;
        $this->categoryRepository = $categoryRepo;
    }

    /**
     * Display a listing of the Food.
     *
     * @param FoodDataTable $foodDataTable
     * @return Response
     */
    public function index(FoodDataTable $foodDataTable)
    {
        return $foodDataTable->render('foods.index');
    }

    /**
     * Show the form for creating a new Food.
     *
     * @return Response
     */
    public function create()
    {

        $category = $this->categoryRepository->pluck('name', 'id');
        if (auth()->user()->hasRole('admin')){
            $restaurant = $this->restaurantRepository->pluck('name', 'id');
        }else{
            $restaurant = $this->restaurantRepository->myRestaurants()->pluck('name', 'id');
        }
        $hasCustomField = in_array($this->foodRepository->model(), setting('custom_field_models', []));
        if ($hasCustomField) {
            $customFields = $this->customFieldRepository->findByField('custom_field_model', $this->foodRepository->model());
            $html = generateCustomField($customFields);
        }
        return view('foods.create')->with("customFields", isset($html) ? $html : false)->with("restaurant", $restaurant)->with("category", $category);
    }

    /**
     * Store a newly created Food in storage.
     *
     * @param CreateFoodRequest $request
     *
     * @return Response
     */
    public function store(CreateFoodRequest $request)
    {
        $input = $request->all();
        $customFields = $this->customFieldRepository->findByField('custom_field_model', $this->foodRepository->model());
        try {
            $food = $this->foodRepository->create($input);
            $food->customFieldsValues()->createMany(getCustomFieldsValues($customFields, $request));
            if (isset($input['image']) && $input['image']) {
                $cacheUpload = $this->uploadRepository->getByUuid($input['image']);
                $mediaItem = $cacheUpload->getMedia('image')->first();
                $mediaItem->copy($food, 'image');
            }
        } catch (ValidatorException $e) {
            Flash::error($e->getMessage());
        }

        Flash::success(__('lang.saved_successfully', ['operator' => __('lang.food')]));

        return redirect(route('foods.index'));
    }

    /**
     * Display the specified Food.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $food = $this->foodRepository->findWithoutFail($id);

        if (empty($food)) {
            Flash::error('Food not found');

            return redirect(route('foods.index'));
        }

        return view('foods.show')->with('food', $food);
    }

    /**
     * Show the form for editing the specified Food.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $food = $this->foodRepository->findWithoutFail($id);
        if (empty($food)) {
            Flash::error(__('lang.not_found', ['operator' => __('lang.food')]));

            return redirect(route('foods.index'));
        }
        $category = $this->categoryRepository->pluck('name', 'id');
        if (auth()->user()->hasRole('admin')){
            $restaurant = $this->restaurantRepository->pluck('name', 'id');
        }else{
            $restaurant = $this->restaurantRepository->myRestaurants()->pluck('name', 'id');
        }
        $customFieldsValues = $food->customFieldsValues()->with('customField')->get();
        $customFields = $this->customFieldRepository->findByField('custom_field_model', $this->foodRepository->model());
        $hasCustomField = in_array($this->foodRepository->model(), setting('custom_field_models', []));
        if ($hasCustomField) {
            $html = generateCustomField($customFields, $customFieldsValues);
        }

        return view('foods.edit')->with('food', $food)->with("customFields", isset($html) ? $html : false)->with("restaurant", $restaurant)->with("category", $category);
    }

    /**
     * Update the specified Food in storage.
     *
     * @param int $id
     * @param UpdateFoodRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFoodRequest $request)
    {
        $food = $this->foodRepository->findWithoutFail($id);

        if (empty($food)) {
            Flash::error('Food not found');
            return redirect(route('foods.index'));
        }
        $input = $request->all();
        $customFields = $this->customFieldRepository->findByField('custom_field_model', $this->foodRepository->model());
        try {
            $food = $this->foodRepository->update($input, $id);

            if (isset($input['image']) && $input['image']) {
                $cacheUpload = $this->uploadRepository->getByUuid($input['image']);
                $mediaItem = $cacheUpload->getMedia('image')->first();
                $mediaItem->copy($food, 'image');
            }
            foreach (getCustomFieldsValues($customFields, $request) as $value) {
                $food->customFieldsValues()
                    ->updateOrCreate(['custom_field_id' => $value['custom_field_id']], $value);
            }
        } catch (ValidatorException $e) {
            Flash::error($e->getMessage());
        }

        Flash::success(__('lang.updated_successfully', ['operator' => __('lang.food')]));

        return redirect(route('foods.index'));
    }

    /**
     * Remove the specified Food from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $food = $this->foodRepository->findWithoutFail($id);

        if (empty($food)) {
            Flash::error('Food not found');

            return redirect(route('foods.index'));
        }

        $this->foodRepository->delete($id);

        Flash::success(__('lang.deleted_successfully', ['operator' => __('lang.food')]));

        return redirect(route('foods.index'));
    }

    /**
     * Remove Media of Food
     * @param Request $request
     */
    public function removeMedia(Request $request)
    {
        $input = $request->all();
        $food = $this->foodRepository->findWithoutFail($input['id']);
        try {
            if ($food->hasMedia($input['collection'])) {
                $food->getFirstMedia($input['collection'])->delete();
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }
}
