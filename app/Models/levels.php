<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class levels
 * @package App\Models
 * @version July 6, 2020, 8:32 am UTC
 *
 * @property string $level
 * @property string $level_Description
 */
class levels extends Model
{
    use SoftDeletes;

    public $table = 'levels';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'level',
        'level_Description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'level' => 'string',
        'level_Description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'level' => 'required',
        'level_Description' => 'required'
    ];

    
}
