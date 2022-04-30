<?php

namespace App\Repositories;

use App\Models\Disciplainary;
use App\Repositories\BaseRepository;

/**
 * Class DisciplainaryRepository
 * @package App\Repositories
 * @version April 14, 2020, 8:27 pm UTC
*/

class DisciplainaryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'emp_pin',
        'status_id',
        'NumberReceived',
        'suspensionstartdate',
        'suspensionenddate'
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
        return Disciplainary::class;
    }
}
