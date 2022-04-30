<?php

namespace App\DataTables;

use App\Models\Disciplainary;
use App\Models\Employees;
use App\Models\Disciplainary_status;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class DisciplainaryDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'disciplainaries.datatables_actions')
        ->editColumn('suspensionenddate',function(Disciplainary $contracts){
            if($contracts->suspensionenddate){
                return $contracts->suspensionenddate->diffForHumans();
            }else{
                return "";
            }
           
        });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Disciplainary $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Disciplainary $model)
    {
        return $model->newQuery()->with(['status','emp']);
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
            'emp_pin'=>new \Yajra\DataTables\Html\Column(['title'=>'Employee Name','data'=>'emp.FirstName','name'=>'emp.FirstName']),
            'status_id'=>new \Yajra\DataTables\Html\Column(['title'=>'Status','data'=>'status.status','name'=>'status.status']),
            'NumberReceived',
            'suspensionstartdate',
            'suspensionenddate'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'disciplainariesdatatable_' . time();
    }
}
