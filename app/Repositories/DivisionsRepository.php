<?php

namespace App\Repositories;

use App\Models\Divisions;
use App\Repositories\BaseRepository;

/**
 * Class DivisionsRepository
 * @package App\Repositories
 * @version May 1, 2020, 11:55 am UTC
*/

class DivisionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Divisionname',
        'Position',
        'Department_id',
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
        return Divisions::class;
    }
}
