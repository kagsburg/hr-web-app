<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class insurancecompensation
 * @package App\Models
 * @version May 4, 2020, 8:14 pm UTC
 *
 * @property \App\Models\Employee empPin
 * @property string DateofIncident
 * @property string Reason of Claim
 * @property string LocationofIncident
 * @property string DateofCompensation
 * @property integer emp_pin
 * @property string createdby
 * @property string updatedby
 */
class insurancecompensation extends Model
{
    use SoftDeletes;

    public $table = 'InsuranceCompensation';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'DateofIncident',
        'ReasonofClaim',
        'LocationofIncident',
        'DateofCompensation',
        'emp_pin',
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
        'DateofIncident' => 'date',
        'ReasonofClaim' => 'string',
        'LocationofIncident' => 'string',
        'DateofCompensation' => 'date',
        'emp_pin' => 'integer',
        'createdby' => 'string',
        'updatedby' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'DateofIncident' => 'required',
        'ReasonofClaim' => 'required',
        'LocationofIncident' => 'required',
        'DateofCompensation' => 'required',
        'emp_pin' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function emp()
    {
        return $this->belongsTo(\App\Models\Employees::class, 'emp_pin');
    }
}
