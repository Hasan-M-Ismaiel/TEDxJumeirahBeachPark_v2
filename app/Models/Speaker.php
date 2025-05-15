<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Speaker extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name', 
        'title',
        'topic_title', 
        'linkedin', 
        'background', 
        'idea', 
        'podcast', 
        'talk', 
        'image', 
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
