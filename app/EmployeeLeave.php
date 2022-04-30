<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeLeave extends Model
{
    //
     public $table = 'employeeleave';

    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    
    public $fillable = [
        'emp_pin',
        'days_taken',
        'depart_id',
        'division_id',
        'Starting_date',
        'ending_date',
        'approval_by_supervisior',
        'reason',
        'status',
    ];
    public function employee()
    {
        return $this->belongsTo(\App\Models\Employees::class, 'emp_pin');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
   public function department()
    {
        return $this->belongsTo(\App\Models\Department::class, 'Department_id');
    }
      public function division()
    {
        return $this->belongsTo(\App\Models\DepartDivision::class, 'Division_id');
    }
}
