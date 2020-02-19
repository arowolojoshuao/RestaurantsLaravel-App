<?php

namespace App\Repositories;

use App\Models\Restaurant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RestaurantRepository
 * @package App\Repositories
 * @version August 29, 2019, 9:38 pm UTC
 *
 * @method Restaurant findWithoutFail($id, $columns = ['*'])
 * @method Restaurant find($id, $columns = ['*'])
 * @method Restaurant first($columns = ['*'])
 */
class RestaurantRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'address',
        'latitude',
        'longitude',
        'phone',
        'mobile',
        'information'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Restaurant::class;
    }

    /**
     * get my restaurants
     */

    public function myRestaurants()
    {
        return Restaurant::join("user_restaurants", "restaurant_id", "=", "restaurants.id")
            ->where('user_restaurants.user_id', auth()->id())->get();
    }

    public function near($myLon, $myLat, $areaLon, $areaLat)
    {
        $this->applyCriteria();
        $this->applyScope();

        $results = $this->model->select(DB::raw("SQRT(
            POW(69.1 * (latitude - " . $myLat . "), 2) +
            POW(69.1 * (" . $myLon . " - longitude) * COS(latitude / 57.3), 2)) AS distance, SQRT(
            POW(69.1 * (latitude - " . $areaLat . "), 2) +
            POW(69.1 * (" . $areaLon . " - longitude) * COS(latitude / 57.3), 2)) AS area"), "restaurants.*")->get();

        $this->resetModel();
        $this->resetScope();

        return $this->parserResult($results);
    }

}
