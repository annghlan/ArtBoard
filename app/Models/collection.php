<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class collection extends Model
{
    use SoftDeletes;

    public $table = 'collection';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        
        'name',
        'front',
        'back',
        'size'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'front' => 'string',
        'back' => 'string',
        'size' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
