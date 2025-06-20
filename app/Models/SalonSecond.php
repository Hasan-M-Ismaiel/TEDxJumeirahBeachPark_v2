<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalonSecond extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 
        'last_name', 
        // 'age', 
        'email', 
        'phone_number',
        // 'country_of_residence', 
        // 'city_of_residence', 
        // 'nationality', 
        'job_title', 
        // 'company_name', 
        'industry', 
        // 'years_of_professional_experience', 
        'how_did_you_hear', 
        // 'have_you_attend', 
        // 'why_attend', 
        'subscribed', 
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
