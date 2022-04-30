<?php

namespace App\Repositories;

use App\Models\insurancecompensation;
use App\Repositories\BaseRepository;

/**
 * Class insurancecompensationRepository
 * @package App\Repositories
 * @version May 4, 2020, 8:14 pm UTC
*/

class insurancecompensationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'DateofIncident',
        'Reason of Claim',
        'LocationofIncident',
        'DateofCompensation',
        'emp_pin',
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
        return insurancecompensation::class;
    }
}
