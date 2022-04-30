<?php

namespace App\Repositories;

use App\Models\Contracts;
use App\Repositories\BaseRepository;

/**
 * Class ContractsRepository
 * @package App\Repositories
 * @version April 13, 2020, 8:49 am UTC
*/

class ContractsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'status_id',
        'emp_id',
        'period',
        'startingDate',
        'endingDate'
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
        return Contracts::class;
    }
}
