<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class class_schedulings
 * @package App\Models
 * @version July 6, 2020, 8:43 am UTC
 *
 * @property integer $course_Id
 * @property integer $level_Id
 * @property integer $shift_Id
 * @property integer $classroom_Id
 * @property integer $batch_Id
 * @property integer $day_Id
 * @property integer $time_Id
 * @property integer $teacher_Id
 * @property time $start_Time
 * @property time $end_Time
 * @property boolean $status
 */
class class_schedulings extends Model
{
    use SoftDeletes;

    public $table = 'class_schedulings';
    
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
        'time_Id',
        'teacher_Id',
        'start_Time',
        'end_Time',
        'status'
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
        'time_Id' => 'integer',
        'teacher_Id' => 'integer',
        'status' => 'boolean'
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
        'time_Id' => 'required',
        'teacher_Id' => 'required',
        'start_Time' => 'required',
        'end_Time' => 'required',
        'status' => 'required'
    ];

    
}
