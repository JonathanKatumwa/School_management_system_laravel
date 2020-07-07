<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class transactions
 * @package App\Models
 * @version July 6, 2020, 8:44 am UTC
 *
 * @property integer $student_Id
 * @property integer $fee_Id
 * @property integer $user_Id
 * @property integer $paid
 * @property string $transaction_Date
 * @property string $remark
 * @property string $description
 */
class transactions extends Model
{
    use SoftDeletes;

    public $table = 'transactions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'student_Id',
        'fee_Id',
        'user_Id',
        'paid',
        'transaction_Date',
        'remark',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'student_Id' => 'integer',
        'fee_Id' => 'integer',
        'user_Id' => 'integer',
        'paid' => 'integer',
        'transaction_Date' => 'date',
        'remark' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'student_Id' => 'required',
        'fee_Id' => 'required',
        'user_Id' => 'required',
        'paid' => 'required',
        'transaction_Date' => 'required',
        'remark' => 'required',
        'description' => 'required'
    ];

    
}
