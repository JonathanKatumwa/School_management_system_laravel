<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class class_assignings
 * @package App\Models
 * @version July 6, 2020, 8:42 am UTC
 *
 * @property integer $course_Id
 * @property integer $level_Id
 * @property integer $shift_Id
 * @property integer $classroom_Id
 * @property integer $batch_Id
 * @property integer $day_Id
 * @property integer $time_Id
 */
class class_assignings extends Model
{
    use SoftDeletes;

    public $table = 'class_assignings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'course_Id',
        'level_Id',
        'shift_Id',
        'classroom_Id',
        'batch_Id',
        'day_Id',
        'time_Id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'course_Id' => 'integer',
        'level_Id' => 'integer',
        'shift_Id' => 'integer',
        'classroom_Id' => 'integer',
        'batch_Id' => 'integer',
        'day_Id' => 'integer',
        'time_Id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_Id' => 'required',
        'level_Id' => 'required',
        'shift_Id' => 'required',
        'classroom_Id' => 'required',
        'batch_Id' => 'required',
        'day_Id' => 'required',
        'time_Id' => 'required'
    ];

    
}
