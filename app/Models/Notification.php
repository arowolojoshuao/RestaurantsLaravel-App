<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Notification
 * @package App\Models
 * @version September 4, 2019, 10:30 am UTC
 *
 * @property \App\Models\NotificationType notificationType
 * @property \App\Models\User user
 * @property string title
 * @property integer notification_type_id
 * @property integer user_id
 * @property boolean read
 */
class Notification extends Model
{

    public $table = 'notifications';
    


    public $fillable = [
        'title',
        'notification_type_id',
        'user_id',
        'read'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'notification_type_id' => 'integer',
        'user_id' => 'integer',
        'read' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'notification_type_id' => 'required|exists:notification_types,id',
        'user_id' => 'required|exists:users,id'
    ];

    /**
     * New Attributes
     *
     * @var array
     */
    protected $appends = [
        'custom_fields',
        
    ];

    public function customFieldsValues()
    {
        return $this->morphMany('App\Models\CustomFieldValue', 'customizable');
    }

    public function getCustomFieldsAttribute()
    {
        $hasCustomField = in_array(static::class,setting('custom_field_models',[]));
        if (!$hasCustomField){
            return [];
        }
        $array = $this->customFieldsValues()
            ->join('custom_fields','custom_fields.id','=','custom_field_values.custom_field_id')
            ->where('custom_fields.in_table','=',true)
            ->get()->toArray();

        return convertToAssoc($array,'name');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function notificationType()
    {
        return $this->belongsTo(\App\Models\NotificationType::class, 'notification_type_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
    
}
