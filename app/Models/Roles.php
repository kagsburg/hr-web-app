<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Roles
 * @package App\Models
 * @version April 3, 2020, 3:39 pm UTC
 *
 * @property string name
 * @property string createdby
 * @property string updatedby
 */
class Roles extends Model
{
    use SoftDeletes;

    public $table = 'roles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
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
        'createdby' => 'string',
        'updatedby' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
       
    ];
    public function user(){
        return $this->hasMany('App\User');
    }

    
}
