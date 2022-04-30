<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Medicalinsurance
 * @package App\Models
 * @version May 4, 2020, 1:50 pm UTC
 *
 * @property \App\Models\Employee empPin
 * @property integer emp_pin
 * @property integer No_of_sibilings
 * @property boolean Spouse
 * @property string Card_status
 * @property string createdby
 * @property string updatedby
 */
class Medicalinsurance extends Model
{
    use SoftDeletes;

    public $table = 'MedicalInsurance';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'emp_pin',
        'No_of_sibilings',
        'Spouse',
        'Card_status',
        'createdby',
        'updatedby'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'emp_pin' => 'integer',
        'No_of_sibilings' => 'integer',
        'Spouse' => 'boolean',
        'Card_status' => 'string',
        'createdby' => 'string',
        'updatedby' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'emp_pin' => 'required',
        'No_of_sibilings' => 'required',
        'Card_status' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function emp()
    {
        return $this->belongsTo(\App\Models\Employees::class, 'emp_pin');
    }
}
