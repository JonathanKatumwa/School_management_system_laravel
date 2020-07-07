<?php

namespace App\Repositories;

use App\Models\transactions;
use App\Repositories\BaseRepository;

/**
 * Class transactionsRepository
 * @package App\Repositories
 * @version July 6, 2020, 8:44 am UTC
*/

class transactionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_Id',
        'fee_Id',
        'user_Id',
        'paid',
        'transaction_Date',
        'remark',
        'description'
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
        return transactions::class;
    }
}
