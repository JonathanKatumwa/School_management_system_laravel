<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class roles
 * @package App\Models
 * @version July 6, 2020, 8:50 am UTC
 *
 * @property string $name
 */
class roles extends Model
{
    use SoftDeletes;

    public $table = 'roles';

    protected $primarykey = 'id';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
