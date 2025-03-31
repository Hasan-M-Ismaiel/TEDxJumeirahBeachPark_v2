<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teammember extends Model
{
    use HasFactory;
    protected $fillable = [
        "full_name", 
        "title",
        "bio",
        "image",
        "caption",
        "subteam"
    ];

    public function events ()
    {
        return $this->belongsToMany(Event::class);
    }

    public function checkifAssignedToEvent(Event $event)
    {
        $numeberOfAssignedEvents = $this->events()
                    ->where('events.id', $event->id)
                    ->count();
        return $numeberOfAssignedEvents > 0 ? true : false; 
    }
}
