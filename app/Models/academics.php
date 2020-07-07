<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class academics
 * @package App\Models
 * @version July 6, 2020, 8:41 am UTC
 *
 * @property string $academic_Year
 */
class academics extends Model
{
    use SoftDeletes;

    public $table = 'academics';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'academic_Year'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'academic_Year' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'academic_Year' => 'required'
    ];

    
}
