<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class shifts
 * @package App\Models
 * @version July 6, 2020, 8:37 am UTC
 *
 * @property string $shift
 */
class shifts extends Model
{
    use SoftDeletes;

    public $table = 'shifts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'shift'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'shift' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'shift' => 'required'
    ];

    
}
