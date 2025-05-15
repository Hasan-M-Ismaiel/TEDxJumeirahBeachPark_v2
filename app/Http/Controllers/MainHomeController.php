<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Speaker;
use App\Models\Teammember;

class MainHomeController extends Controller
{

    public function show()
    {
        return view('program');
    }

    public function main()
    {
        $events = Event::all();
        $categories = Category::with('images')->get(); // Eager load images with categories
        $speakers = Speaker::orderBy('name', 'asc')->get();
    
        // Gather all images from all categories
        $images = $categories->flatMap(function ($category) {
            return $category->images;
        });
    
        $images_ = $images->take(20); // Just the first 20 images overall
        $event = $events->first();
        return view('main_home', ['event' => $event, 'images' => $images_, 'speakers' => $speakers]);
    }

    public function about()
    {
        $events = Event::all();
        $event = $events->first();
        return view('main_aboutus', ['event' => $event]);
    }

    public function members()
    {
        $events = Event::all();
        $event = $events->first();
        return view('main_members', ['event' => $event]);
    }

    public function sponsers()
    {
        $events = Event::all();
        $event = $events->first();
        return view('main_sponser', ['event' => $event]);
    }

    public function faq()
    {
        $events = Event::all();
        $event = $events->first();
        return view('main_faq', ['event' => $event]);
    }

    public function aboutTed()
    {
        $events = Event::all();
        $event = $events->first();
        return view('main_about_ted', ['event' => $event]);
    }

    public function register()
    {
        $events = Event::all();
        $event = $events->first();
        return view('main_register', [
            'event' => $event,
        ]);
    }

    public function partner()
    {
        $events = Event::all();
        $event = $events->first();
        return view('main_partner', [
            'event' => $event,
        ]);
    }

    public function partner_evaluation_form()
    {
        $events = Event::all();
        $event = $events->first();
        return view('partner_evaluation_form', [
            'event' => $event,
        ]);
    }

    public function speaker_evaluation_form()
    {
        $events = Event::all();
        $event = $events->first();
        return view('speaker_evaluation_form', [
            'event' => $event,
        ]);
    }

    public function volunteer()
    {
        $events = Event::all();
        $event = $events->first();
        return view('main_volunteer', [
            'event' => $event,
        ]);
    }

    public function other()
    {
        $events = Event::all();
        $event = $events->first();
        return view('main_other', [
            'event' => $event,
        ]);
    }

    public function register_form()
    {
        $events = Event::all();
        $event = $events->first();
        return view('register_form', [
            'event' => $event,
        ]);
    }

    public function partner_form()
    {
        $events = Event::all();
        $event = $events->first();
        return view('partner_form', [
            'event' => $event,
        ]);
    }

    public function volunteer_form()
    {
        $events = Event::all();
        $event = $events->first();
        return view('volunteer_form', [
            'event' => $event,
        ]);
    }

    public function tedx_event_1()
    {
        $events = Event::all();
        $event = $events->first();
        return view('tedx_event_1', ['event' => $event]);
    }

    public function tedx_event_2()
    {
        $events = Event::all();
        $event = $events->first();
        return view('tedx_event_2', ['event' => $event]);
    }

    // main registeration form 
    public function tedx_main_event()
    {
        $events = Event::all();
        $event = $events->first();
        return view('register_main_event_form', ['event' => $event]);
    }

    // not used
    public function register_main_event_form()
    {
        $events = Event::all();
        $event = $events->first();
        return view('register_main_event_form', [
            'event' => $event,
        ]);
    }

    public function register_salon_1()
    {
        $events = Event::all();
        $event = $events->first();
        return view('register_salon_1_form', [
            'event' => $event,
        ]);
    }

    public function register_salon_2()
    {
        $events = Event::all();
        $event = $events->first();
        return view('register_salon_2_form', [
            'event' => $event,
        ]);
    }

    public function team()
    {
        $events = Event::all();
        $members = Teammember::all();
        $event = $events->first();
        return view('main_team', [
            'event' => $event,
            'members' => $members
        ]);
    }

    public function teammember(Teammember $teammember)
    {
        $events = Event::all();
        $event = $events->first();
        return view('team_member_details', ['event' => $event, 'member' => $teammember]);
    }

    

    public function speaker(Speaker $speaker)
    {
        $events = Event::all();
        $event = $events->first();
        return view('speaker_details', ['event' => $event, 'member' => $speaker]);
    }


    public function gallery()
    {
        $events = Event::all();
        $event = $events->first();
        $categories = Category::all();
        return view('includes/gallery', ['event' => $event, 'categories' => $categories]);
    }

    public function images(Category $category)
    {
        $events = Event::all();
        $event = $events->first();
        $images= $category->images;
        return view('includes/single', ['event' => $event, 'images' => $images]);
    }

}
