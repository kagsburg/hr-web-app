<?php

namespace App\Repositories;

use App\Models\Contract_status;
use App\Repositories\BaseRepository;

/**
 * Class Contract_statusRepository
 * @package App\Repositories
 * @version April 2, 2020, 4:36 pm UTC
*/

class Contract_statusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'status'
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
        return Contract_status::class;
    }
}
