<?php

namespace App\DataTables;

use app\EmployeeLeave;
use Auth;
use App\Models\Employees;
use App\Models\Disciplainary_status;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class EmployeeleaveDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'EmployeeLeave.datatables_actions');
        
    }

    /**
     * Get query source of dataTable.
     *
     * @param app\EmployeeLeave $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(EmployeeLeave $model)
    {
        $user_id = Auth::user()->emp_pin;
        return $model->newQuery()->where('emp_pin',$user_id)->with(['employee']);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                   // ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                   // ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                   // ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id',
            'emp_pin'=>new \Yajra\DataTables\Html\Column(['title'=>'Employee Name','data'=>'employee.FirstName','name'=>'employee.FirstName']),
            'Starting_date',
            'ending_date',
            'status'        
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'employeeleavedatatable_' . time();
    }
}