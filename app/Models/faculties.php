<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class faculties
 * @package App\Models
 * @version July 6, 2020, 8:38 am UTC
 *
 * @property string $faculty_Name
 * @property string $faculty_Code
 * @property string $faculty_Description
 * @property boolean $faculty_Status
 */
class faculties extends Model
{
    use SoftDeletes;

    public $table = 'faculties';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'faculty_Name',
        'faculty_Code',
        'faculty_Description',
        'faculty_Status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'faculty_Name' => 'string',
        'faculty_Code' => 'string',
        'faculty_Description' => 'string',
        'faculty_Status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'faculty_Name' => 'required',
        'faculty_Code' => 'required',
        'faculty_Description' => 'required',
        'faculty_Status' => 'required'
    ];

    
}
