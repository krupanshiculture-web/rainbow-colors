<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category',
        'featured_image',
        'excerpt',
        'content',
        'author',
        'published_at',
        'status',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];
}
