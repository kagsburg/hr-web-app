<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Departments
 * @package App\Models
 * @version May 1, 2020, 6:21 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection employeeleaves
 * @property string name
 * @property string createdby
 * @property string updatedby
 */
class Departments extends Model
{
    use SoftDeletes;

    public $table = 'Department';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'HeadsofDepartments',
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
        'name' => 'string',
        'HeadsofDepartments'=> 'string',
        'createdby' => 'string',
        'updatedby' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function employeeleaves()
    {
        return $this->hasMany(\App\Models\Employeeleave::class, 'depart_id');
    }

     public function divisions()
    {
        return $this->hasMany(\App\Models\Divisions::class, 'Department_id');
    }
}
