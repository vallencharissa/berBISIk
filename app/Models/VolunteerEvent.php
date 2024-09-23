<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VolunteerEvent extends Model
{
    use HasFactory;

    public function volunteer_event_details(){
        return $this->hasOne(VolunteerEventDetail::class);
    }
    
    public function volunteer_event_schedules(){
        return $this->hasOne(VolunteerEventSchedule::class);
    }

    public function users_volunteer_events(){
        return $this->hasMany(UsersVolunteerEvent::class, 'volunteer_event_id', 'id');
    }
}