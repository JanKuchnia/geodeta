<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title', 'slug', 'icon', 'stage_label', 'description',
        'duration', 'tags', 'when_needed', 'process_steps', 'sort_order',
    ];

    protected $casts = [
        'tags' => 'array',
        'when_needed' => 'array',
        'process_steps' => 'array',
    ];
}
