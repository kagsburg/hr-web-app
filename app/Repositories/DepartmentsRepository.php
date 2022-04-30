<?php

namespace App\Repositories;

use App\Models\Departments;
use App\Repositories\BaseRepository;

/**
 * Class DepartmentsRepository
 * @package App\Repositories
 * @version May 1, 2020, 6:21 am UTC
*/

class DepartmentsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'createdby',
        'updatedby'
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
        return Departments::class;
    }
}
