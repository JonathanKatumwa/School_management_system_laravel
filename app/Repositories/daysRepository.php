<?php

namespace App\Repositories;

use App\Models\days;
use App\Repositories\BaseRepository;

/**
 * Class daysRepository
 * @package App\Repositories
 * @version July 6, 2020, 8:41 am UTC
*/

class daysRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return days::class;
    }
}
