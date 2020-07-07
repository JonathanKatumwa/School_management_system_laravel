<?php

namespace App\Repositories;

use App\Models\roles;
use App\Repositories\BaseRepository;

/**
 * Class rolesRepository
 * @package App\Repositories
 * @version July 6, 2020, 8:50 am UTC
*/

class rolesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    protected $primarykey = "id";

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
        return roles::class;
    }
}
