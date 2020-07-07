<?php

namespace App\Repositories;

use App\Models\attendances;
use App\Repositories\BaseRepository;

/**
 * Class attendancesRepository
 * @package App\Repositories
 * @version July 6, 2020, 8:40 am UTC
*/

class attendancesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_Id',
        'class_Id',
        'subject_Id',
        'teacher_Id',
        'attendance_Status'
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
        return attendances::class;
    }
}
