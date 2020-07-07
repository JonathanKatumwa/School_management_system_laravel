<?php

namespace App\Repositories;

use App\Models\levels;
use App\Repositories\BaseRepository;

/**
 * Class levelsRepository
 * @package App\Repositories
 * @version July 6, 2020, 8:32 am UTC
*/

class levelsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'level',
        'level_Description'
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
        return levels::class;
    }
}
