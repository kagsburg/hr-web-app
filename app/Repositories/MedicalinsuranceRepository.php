<?php

namespace App\Repositories;

use App\Models\Medicalinsurance;
use App\Repositories\BaseRepository;

/**
 * Class MedicalinsuranceRepository
 * @package App\Repositories
 * @version May 4, 2020, 1:50 pm UTC
*/

class MedicalinsuranceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'emp_pin',
        'No_of_sibilings',
        'Spouse',
        'Card_status',
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
        return Medicalinsurance::class;
    }
}
