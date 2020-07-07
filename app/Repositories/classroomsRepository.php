<?php

namespace App\Repositories;

use App\Models\classrooms;
use App\Repositories\BaseRepository;

/**
 * Class classroomsRepository
 * @package App\Repositories
 * @version July 6, 2020, 8:30 am UTC
*/

class classroomsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'classroom_Name',
        'classroom_code',
        'classroom_Description',
        'classroom_status'
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
        return classrooms::class;
    }
}
