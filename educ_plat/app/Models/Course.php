<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'thumbnail',
        'price',
        'level',
        'user_id'
    ];

    protected $casts = [
        'price' => 'decimal:2'
    ];
}
