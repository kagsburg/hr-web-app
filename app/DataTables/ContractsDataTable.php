<?php

namespace App\DataTables;

use App\Models\Contracts;
use App\Models\Contract_status;
use App\Models\Employees;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class ContractsDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'contracts.datatables_actions')
                            ->editColumn('endingDate',function(Contracts $contracts){
                                return $contracts->endingDate->diffForHumans();
                            });
                              
                            
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Contracts $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Contracts $model)
    {
        return $model->newQuery()->with(['status','employee']);
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
            'status_id'=>new \Yajra\DataTables\Html\Column(['title'=>'Status','data'=>'status.status','name'=>'status.status']),
            'emp'=>new \Yajra\DataTables\Html\Column(['title'=>'Employee Name','data'=>'employee.FirstName','name'=>'employee.FirstName']),
            //'Status'=>new \Yajra\DataTables\Html\Column(['title'=>'Status','data'=>'status.status','name'=>'status.status']),
            //'Employee Name'=>new \Yajra\DataTables\Html\Column(['title'=>'Employee Name','data'=>'emp.FirstName','name'=>'emp.FirstName']),
            'period',
            'startingDate',
            'endingDate',
           
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'contractsdatatable_' . time();
    }
}
