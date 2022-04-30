<?php

namespace App\Repositories;

use App\Models\Employees;
use App\Repositories\BaseRepository;

/**
 * Class EmployeesRepository
 * @package App\Repositories
 * @version May 14, 2020, 5:43 am UTC
*/

class EmployeesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'FirstName',
        'LastName',
        'CurrentAddress',
        'Gender',
        'DateofJoining',
        'DateofBirth',
        'MartialStatus',
        'LevelofEducation',
        'createdby',
        'updatedby',
        'Department_id',
        'Division_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Employees::class;
    }
}
