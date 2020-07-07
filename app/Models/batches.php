<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class batches
 * @package App\Models
 * @version July 6, 2020, 8:34 am UTC
 *
 * @property string $batch
 */
class batches extends Model
{
    use SoftDeletes;

    public $table = 'batches';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primarykey = 'id';



    public $fillable = [
        'batch'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'batch' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'batch' => 'required'
    ];

    
}
