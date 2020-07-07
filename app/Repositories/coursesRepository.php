<?php

namespace App\Repositories;

use App\Models\courses;
use App\Repositories\BaseRepository;

/**
 * Class coursesRepository
 * @package App\Repositories
 * @version July 6, 2020, 8:38 am UTC
*/

class coursesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'course_Name',
        'course_Code',
        'description',
        'status'
    ];

    protected $primarykey = 'id';

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
        return courses::class;
    }
}
