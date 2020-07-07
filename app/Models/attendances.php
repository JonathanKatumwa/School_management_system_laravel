<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class attendances
 * @package App\Models
 * @version July 6, 2020, 8:40 am UTC
 *
 * @property integer $student_Id
 * @property integer $class_Id
 * @property integer $subject_Id
 * @property integer $teacher_Id
 * @property boolean $attendance_Status
 */
class attendances extends Model
{
    use SoftDeletes;

    public $table = 'attendances';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'student_Id',
        'class_Id',
        'subject_Id',
        'teacher_Id',
        'attendance_Status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'student_Id' => 'integer',
        'class_Id' => 'integer',
        'subject_Id' => 'integer',
        'teacher_Id' => 'integer',
        'attendance_Status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'student_Id' => 'required',
        'class_Id' => 'required',
        'subject_Id' => 'required',
        'teacher_Id' => 'required',
        'attendance_Status' => 'required'
    ];

    
}
