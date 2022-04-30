<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Disciplainary_status
 * @package App\Models
 * @version March 29, 2020, 2:04 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection disciplainaries
 * @property string status
 * @property string createdby
 * @property string updatedby
 */
class Disciplainary_status extends Model
{
    use SoftDeletes;

    public $table = 'Disciplainarystatus';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primary_key= 'id';

    public $fillable = [
        'status',
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
        'status' => 'string',
        'createdby' => 'string',
        'updatedby' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'status' => 'required',
       
    ];


    public  function updateData($id, $input)
    {
        return static::find($id)->update($input);
    }

    public function deleteData($id)
    {
        return static::find($id)->delete();
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function disciplainaries()
    {
        return $this->hasMany(\App\Models\Disciplainary::class, 'status_id');
    }
}
