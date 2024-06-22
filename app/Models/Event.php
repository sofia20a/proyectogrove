<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'categories_events_id',        
        'status_events_id',
        'name',
        'description',
        'priority',
        'image_event',
        'scheduled_at'
    ];
}

