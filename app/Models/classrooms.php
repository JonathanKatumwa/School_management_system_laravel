<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class classrooms
 * @package App\Models
 * @version July 6, 2020, 8:30 am UTC
 *
 * @property string $classroom_Name
 * @property integer $classroom_code
 * @property string $classroom_Description
 * @property boolean $classroom_status
 */
class classrooms extends Model
{
    use SoftDeletes;

    public $table = 'classrooms';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'classroom_Name',
        'classroom_code',
        'classroom_Description',
        'classroom_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'classroom_Name' => 'string',
        'classroom_code' => 'integer',
        'classroom_Description' => 'string',
        'classroom_status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'classroom_Name' => 'required',
        'classroom_code' => 'required',
        'classroom_Description' => 'required',
        'classroom_status' => 'required'
    ];

    
}
