<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'author', 'role', 'rating', 'text', 'service_tag',
        'verified', 'source', 'published',
    ];
}
