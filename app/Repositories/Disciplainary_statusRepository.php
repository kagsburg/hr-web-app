<?php

namespace App\Repositories;

use App\Models\Disciplainary_status;
use App\Repositories\BaseRepository;

/**
 * Class Disciplainary_statusRepository
 * @package App\Repositories
 * @version March 29, 2020, 2:04 pm UTC
*/

class Disciplainary_statusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'status',
        'createdby',
        'updatedby'
    ];
    protected $primary_key= 'id';

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
        return Disciplainary_status::class;
    }
}
