<?php

namespace App\DataTables;

use App\Models\Divisions;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class DivisionsDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'divisions.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Divisions $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Divisions $model)
    {
        return $model->newQuery()->with(['department']);
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
                   // ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
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
            'Divisionname',
            'Position',
            'Sub-Position',
            'Department_id'=>new \Yajra\DataTables\Html\Column(['title'=>'Department Name','data'=>'department.name','name'=>'department.name']),
            'HeadsofDepartments'=>new \Yajra\DataTables\Html\Column(['title'=>'Head of Department','data'=>'department.HeadsofDepartments','name'=>'department.HeadsofDepartments'])
         
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'divisionsdatatable_' . time();
    }
}
