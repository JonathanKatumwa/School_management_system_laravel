<?php

namespace App\Repositories;

use App\Models\class_schedulings;
use App\Repositories\BaseRepository;

/**
 * Class class_schedulingsRepository
 * @package App\Repositories
 * @version July 6, 2020, 8:43 am UTC
*/

class class_schedulingsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'course_Id',
        'level_Id',
        'shift_Id',
        'classroom_Id',
        'batch_Id',
        'day_Id',
        'time_Id',
        'teacher_Id',
        'start_Time',
        'end_Time',
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
        return class_schedulings::class;
    }
}
