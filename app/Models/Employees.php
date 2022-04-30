<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Employees
 * @package App\Models
 * @version May 14, 2020, 5:43 am UTC
 *
 * @property \App\Models\Department department
 * @property \App\Models\DepartDivision division
 * @property \Illuminate\Database\Eloquent\Collection contracts
 * @property \Illuminate\Database\Eloquent\Collection disciplainaries
 * @property \Illuminate\Database\Eloquent\Collection employeeleaves
 * @property \Illuminate\Database\Eloquent\Collection insurancecompensations
 * @property \Illuminate\Database\Eloquent\Collection medicalinsurances
 * @property string FirstName
 * @property string LastName
 * @property string CurrentAddress
 * @property string Gender
 * @property string DateofJoining
 * @property string DateofBirth
 * @property string MartialStatus
 * @property string LevelofEducation
 * @property string createdby
 * @property string updatedby
 * @property integer Department_id
 * @property integer Division_id
 */
class Employees extends Model
{
    use SoftDeletes;

    public $table = 'Employees';
    protected $primaryKey = 'emp_pin';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'emp_pin', 
        'FirstName',
        'LastName',
        'CurrentAddress',
        'Gender',
        'DateofJoining',
        'DateofBirth',
        'MartialStatus',
        'LevelofEducation',
        'createdby',
        'updatedby',
        'Department_id',
        'Division_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'emp_pin' => 'integer',
        'FirstName' => 'string',
        'LastName' => 'string',
        'CurrentAddress' => 'string',
        'Gender' => 'string',
        'DateofJoining' => 'date',
        'DateofBirth' => 'date',
        'MartialStatus' => 'string',
        'LevelofEducation' => 'string',
        'createdby' => 'string',
        'updatedby' => 'string',
        'Department_id' => 'integer',
        'Division_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'FirstName' => 'required',
        'LastName' => 'required',
        'CurrentAddress' => 'required',
        'Gender' => 'required',
        'DateofJoining' => 'required',
        'DateofBirth' => 'required',
        'MartialStatus' => 'required',
        'LevelofEducation' => 'required',
        'Department_id' => 'required',
        'Division_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function department()
    {
        return $this->belongsTo(\App\Models\Department::class, 'Department_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function division()
    {
        return $this->belongsTo(\App\Models\DepartDivision::class, 'Division_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function contracts()
    {
        return $this->hasMany(\App\Models\Contract::class, 'emp_pin');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function disciplainaries()
    {
        return $this->hasMany(\App\Models\Disciplainary::class, 'emp_pin');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function employeeleaves()
    {
        return $this->hasMany(\App\Models\Employeeleave::class, 'emp_pin');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function insurancecompensations()
    {
        return $this->hasMany(\App\Models\Insurancecompensation::class, 'emp_pin');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function medicalinsurances()
    {
        return $this->hasMany(\App\Models\Medicalinsurance::class, 'emp_pin');
    }
}
