<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class courses
 * @package App\Models
 * @version July 6, 2020, 8:38 am UTC
 *
 * @property string $course_Name
 * @property string $course_Code
 * @property string $description
 * @property boolean $status
 */
class courses extends Model
{
    use SoftDeletes;

    public $table = 'courses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primarykey = 'id';



    public $fillable = [
        'course_Name',
        'course_Code',
        'description',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'course_Name' => 'string',
        'course_Code' => 'string',
        'description' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_Name' => 'required',
        'course_Code' => 'required',
        'description' => 'required',
        'status' => 'required'
    ];

    
}
