<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Divisions
 * @package App\Models
 * @version May 1, 2020, 11:55 am UTC
 *
 * @property \App\Models\Department department
 * @property \Illuminate\Database\Eloquent\Collection employeeleaves
 * @property string Divisionname
 * @property string Position
 * @property integer Department_id
 * @property string createdby
 * @property string updatedby
 */
class Divisions extends Model
{
    use SoftDeletes;

    public $table = 'depart-divisions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Divisionname',
        'Position',
        'Sub-Position',
        'Department_id',
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
        'Divisionname' => 'string',
        'Position' => 'string',
        'Sub-Position'=> 'string',
        'Department_id' => 'integer',
        'createdby' => 'string',
        'updatedby' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Position' => 'required',
        'Department_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function department()
    {
        return $this->belongsTo(\App\Models\Departments::class, 'Department_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function employeeleaves()
    {
        return $this->hasMany(\App\Models\Employeeleave::class, 'division_id');
    }
}
