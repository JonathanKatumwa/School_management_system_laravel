<?php

namespace App\Repositories;

use App\Models\batches;
use App\Repositories\BaseRepository;

/**
 * Class batchesRepository
 * @package App\Repositories
 * @version July 6, 2020, 8:34 am UTC
*/

class batchesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'batch'
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
        return batches::class;
    }
}
