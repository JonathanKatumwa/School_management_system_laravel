<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class classes
 * @package App\Models
 * @version July 6, 2020, 8:14 am UTC
 *
 * @property string $class_Name
 * @property string $class_Code
 */
class classes extends Model
{
    use SoftDeletes;

    public $table = 'classes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'class_Name',
        'class_Code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'class_Name' => 'string',
        'class_Code' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'class_Name' => 'required',
        'class_Code' => 'required'
    ];

    
}
