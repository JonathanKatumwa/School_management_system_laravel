<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class teachers
 * @package App\Models
 * @version July 6, 2020, 8:49 am UTC
 *
 * @property string $first_Name
 * @property string $last_Name
 * @property string $gender
 * @property string $email
 * @property string $dob
 * @property string $phone
 * @property string $address
 * @property string $current_Address
 * @property string $nationality
 * @property string $passport_No
 * @property boolean $status
 * @property string $dateregistered
 * @property integer $user_Id
 * @property integer $class_Id
 * @property string $image
 */
class teachers extends Model
{
    use SoftDeletes;

    public $table = 'teachers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'first_Name',
        'last_Name',
        'gender',
        'email',
        'dob',
        'phone',
        'address',
        'current_Address',
        'nationality',
        'passport_No',
        'status',
        'dateregistered',
        'user_Id',
        'class_Id',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'first_Name' => 'string',
        'last_Name' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'dob' => 'date',
        'phone' => 'string',
        'address' => 'string',
        'current_Address' => 'string',
        'nationality' => 'string',
        'passport_No' => 'string',
        'status' => 'boolean',
        'dateregistered' => 'date',
        'user_Id' => 'integer',
        'class_Id' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_Name' => 'required',
        'last_Name' => 'required',
        'gender' => 'required',
        'email' => 'required',
        'dob' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'current_Address' => 'required',
        'nationality' => 'required',
        'passport_No' => 'required',
        'status' => 'required',
        'dateregistered' => 'required',
        'user_Id' => 'required',
        'class_Id' => 'required'
    ];

    
}
