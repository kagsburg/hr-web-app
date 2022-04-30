<?php

namespace App\DataTables;

use App\Models\insurancecompensation;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class insurancecompensationDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'insurancecompensations.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\insurancecompensation $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(insurancecompensation $model)
    {
        return $model->newQuery()->with(['emp']);
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
                    //['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    //['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    //['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
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
            'emp_pin'=>new \Yajra\DataTables\Html\Column(['title'=>'Employee First Name','data'=>'emp.FirstName','name'=>'emp.FirstName']),
            'DateofIncident',
            'ReasonofClaim',
            'LocationofIncident',
            'DateofCompensation',
            
            // 'createdby',
            // 'updatedby'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'insurancecompensationsdatatable_' . time();
    }
}
