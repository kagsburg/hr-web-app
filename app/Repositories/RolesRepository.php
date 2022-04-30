<?php

namespace App\Repositories;

use App\Models\Roles;
use App\Repositories\BaseRepository;

/**
 * Class RolesRepository
 * @package App\Repositories
 * @version April 3, 2020, 3:39 pm UTC
*/

class RolesRepository extends BaseRepository
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
        return Roles::class;
    }
}
