<?php

namespace App\Repositories;

use App\Models\faculties;
use App\Repositories\BaseRepository;

/**
 * Class facultiesRepository
 * @package App\Repositories
 * @version July 6, 2020, 8:38 am UTC
*/

class facultiesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'faculty_Name',
        'faculty_Code',
        'faculty_Description',
        'faculty_Status'
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
        return faculties::class;
    }
}
