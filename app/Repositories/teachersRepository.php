<?php

namespace App\Repositories;

use App\Models\teachers;
use App\Repositories\BaseRepository;

/**
 * Class teachersRepository
 * @package App\Repositories
 * @version July 6, 2020, 8:49 am UTC
*/

class teachersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'first_Name',
        'last_Name',
        'gender',
        'email',
        'dob',
        'phone',
        'address',
        'current_Address',
        'nationality',
        'passport_No',
        'status',
        'dateregistered',
        'user_Id',
        'class_Id',
        'image'
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
        return teachers::class;
    }
}
