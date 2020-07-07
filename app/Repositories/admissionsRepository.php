<?php

namespace App\Repositories;

use App\Models\admissions;
use App\Repositories\BaseRepository;

/**
 * Class admissionsRepository
 * @package App\Repositories
 * @version July 6, 2020, 8:49 am UTC
*/

class admissionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'roll_No',
        'first_Name',
        'last_Name',
        'father_Name',
        'father_Phone',
        'mother_Name',
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
        return admissions::class;
    }
}
