<?php

namespace App\Models;

use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['title', 'slug', 'description', 'short_description', 'type', 'cover_image', 'date', 'location', 'audience_count', 'is_upcoming'];

    public function speakers()
    {
        return $this->belongsToMany(Speaker::class);
    }

    public function teammembers()
    {
        return $this->belongsToMany(Teammember::class);
    }

    public function sponsors()
    {
        return $this->belongsToMany(Sponsor::class);
    }

    public function partners()
    {
        return $this->belongsToMany(Partner::class);
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // public function remainingTime()
    // {

    //     $date_now_ = date('Y-m-d h:i:s a', time());;

    //     $date_now = new DateTime($date_now_);
    //     $date_event_created = new DateTime($this->created_at);
    //     $date_for_event = new DateTime($this->date);


    //     $from_now_to_occure = $date_for_event->diff($date_now);
    //     $from_created_to_occure = $date_event_created->diff($date_for_event);

    //     $passedDayes = $from_created_to_occure->d - $from_now_to_occure->d;
    //     return ($passedDayes*100)/$from_created_to_occure->d;

    // }

    // public function remaining_time()
    // {
    //     $date_now_ = date('Y-m-d h:i:s a', time());;

    //     $date_now = new DateTime($date_now_);
    //     $date_for_event = new DateTime($this->date);
    //     $from_now_to_occure = $date_for_event->diff($date_now);

    //     return $from_now_to_occure->d;
    // }
}
