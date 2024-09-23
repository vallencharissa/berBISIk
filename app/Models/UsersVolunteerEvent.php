<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersVolunteerEvent extends Model
{
    use HasFactory;
    protected $primaryKey = ['user_id', 'volunteer_event_id'];

    public $incrementing = false;
    protected $keyType = 'array';


    protected $casts = [
        'user_id' => 'integer',
        'volunteer_event_id' => 'integer',
    ];

    public function volunteer_events()
    {
        return $this->belongsTo(VolunteerEvent::class, 'volunteer_event_id', 'id');
    }
}
