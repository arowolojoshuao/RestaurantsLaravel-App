<?php

namespace App\Repositories;

use App\Models\Extra;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ExtraRepository
 * @package App\Repositories
 * @version August 29, 2019, 9:39 pm UTC
 *
 * @method Extra findWithoutFail($id, $columns = ['*'])
 * @method Extra find($id, $columns = ['*'])
 * @method Extra first($columns = ['*'])
*/
class ExtraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'price',
        'food_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Extra::class;
    }
}
