<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VolunteerEventSchedule extends Model
{
    use HasFactory;

    protected $casts = [
        'date' => 'date'
    ];
}
