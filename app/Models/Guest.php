<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    // Add the columns you want to allow for mass assignment
    protected $fillable = [
        'name',
        'email',
        'RSVP_status',
        'dietary_preferences',
        'event_id',
    ];
}
