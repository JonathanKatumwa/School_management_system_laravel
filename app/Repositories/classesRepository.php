<?php

namespace App\Repositories;

use App\Models\classes;
use App\Repositories\BaseRepository;

/**
 * Class classesRepository
 * @package App\Repositories
 * @version July 6, 2020, 8:14 am UTC
*/

class classesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'class_Name',
        'class_Code'
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
        return classes::class;
    }
}
