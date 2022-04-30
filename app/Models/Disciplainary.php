<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Disciplainary
 * @package App\Models
 * @version April 14, 2020, 8:27 pm UTC
 *
 * @property \App\Models\Employee empPin
 * @property \App\Models\Disciplainarystatus status
 * @property integer emp_pin
 * @property integer status_id
 * @property integer NumberReceived
 * @property string suspensionstartdate
 * @property string suspensionenddate
 */
class Disciplainary extends Model
{
    use SoftDeletes;

    public $table = 'Disciplainary';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'emp_pin',
        'status_id',
        'NumberReceived',
        'suspensionstartdate',
        'suspensionenddate'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'emp_pin' => 'integer',
        'status_id' => 'integer',
        'NumberReceived' => 'integer',
        'suspensionstartdate' => 'date',
        'suspensionenddate' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'emp_pin' => 'required',
        'status_id' => 'required',
        'NumberReceived' => 'required'
    ];


    
  

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function emp()
    {
        return $this->belongsTo(\App\Models\Employees::class, 'emp_pin');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function status()
    {
        return $this->belongsTo(\App\Models\Disciplainary_status::class, 'status_id');
    }
}
