<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contract_status
 * @package App\Models
 * @version April 2, 2020, 4:36 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection contracts
 * @property string status
 */
class Contract_status extends Model
{
    use SoftDeletes;

    public $table = 'contracts_status';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     * 
     */
    protected $casts = [
        'id' => 'integer',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'status' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function contracts()
    {
        return $this->hasMany(\App\Models\Contract::class, 'status_id');
    }
}
