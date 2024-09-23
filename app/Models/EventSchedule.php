<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EventSchedule extends Model
{
    use HasFactory;
    
    protected $casts = [
        'date' => 'date'
    ];

}
