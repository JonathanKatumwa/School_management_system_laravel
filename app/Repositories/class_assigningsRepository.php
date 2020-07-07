<?php

namespace App\Repositories;

use App\Models\class_assignings;
use App\Repositories\BaseRepository;

/**
 * Class class_assigningsRepository
 * @package App\Repositories
 * @version July 6, 2020, 8:42 am UTC
*/

class class_assigningsRepository extends BaseRepository
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
        'time_Id'
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
        return class_assignings::class;
    }
}
