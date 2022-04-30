<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contracts
 * @package App\Models
 * @version April 13, 2020, 8:49 am UTC
 *
 * @property \App\Models\Employee emp
 * @property \App\Models\ContractsStatus status
 * @property \Illuminate\Database\Eloquent\Collection contractsStatus1s
 * @property integer status_id
 * @property integer emp_id
 * @property integer period
 * @property string startingDate
 * @property string endingDate
 */
class Contracts extends Model
{
    use SoftDeletes;

    public $table = 'contracts';

    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'status_id',
        'emp_id',
        'period',
        'startingDate',
        'endingDate'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'status_id' => 'integer',
        'emp_id' => 'integer',
        'period' => 'integer',
        'startingDate' => 'date',
        'endingDate' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'status_id' => 'required',
        'emp_id' => 'required',
        'period' => 'required',
        'startingDate' => 'required',
        'endingDate' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function employee()
    {
        return $this->belongsTo(\App\Models\Employees::class, 'emp_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function status()
    {
        return $this->belongsTo(\App\Models\Contract_status::class, 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function contractsStatus1s()
    {
        return $this->belongsToMany(\App\Models\ContractsStatus::class, 'contract_status_id');
    }
}
