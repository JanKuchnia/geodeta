<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'title', 'description', 'category', 'badge', 'location',
        'equipment', 'result_badge', 'alt_text', 'image_path', 'sort_order',
    ];
}
