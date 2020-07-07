<?php

namespace App\Repositories;

use App\Models\academics;
use App\Repositories\BaseRepository;

/**
 * Class academicsRepository
 * @package App\Repositories
 * @version July 6, 2020, 8:41 am UTC
*/

class academicsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'academic_Year'
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
        return academics::class;
    }
}
