<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function instructors()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id', 'id');
    }

    public function event_types()
    {
        return $this->belongsTo(EventType::class, 'event_type_id', 'id');
    }

    public function event_schedules()
    {
        return $this->hasMany(EventSchedule::class, 'event_id', 'id');
    }

    public function event_details()
    {
        return $this->hasOne(EventDetail::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'event_id', 'id');
    }

    public function users_events()
    {
        return $this->hasMany(UsersEvent::class, 'event_id', 'id');
    }
}
