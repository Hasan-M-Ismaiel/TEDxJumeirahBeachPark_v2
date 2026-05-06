<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Partner;
use App\Models\Speaker;
use App\Models\Teammember;

class MainHomeController extends Controller
{

    // home page
    public function main()
    {
        $event = Event::where('is_upcoming', true)
            ->orderBy('date')
            ->first();

        $members = Teammember::with('events')->get();

        if (!$event) {
            $event = Event::orderBy('date', 'desc')->first();
        }

        $eventPartners = $event->partners()->get();

        $otherPartners = Partner::whereNotIn('id', $eventPartners->pluck('id'))->get();

        return view('home', compact('event', 'members', 'eventPartners', 'otherPartners'));

    }

    // core team members page
    public function members()
    {
        $events = Event::all();
        $event = $events->first();
        return view('members', ['event' => $event]);
    }

    // about ted page
    public function aboutTed()
    {
        $events = Event::all();
        $event = $events->first();
        return view('about_ted', ['event' => $event]);
    }

    // speaker register page
    public function register()
    {
        $events = Event::all();
        $event = $events->first();
        return view('registration.register', [
            'event' => $event,
        ]);
    }

    // partners register page
    public function partner()
    {
        $events = Event::all();
        $event = $events->first();
        return view('registration.partner', [
            'event' => $event,
        ]);
    }

    // volunteering register page
    public function volunteer()
    {
        $events = Event::all();
        $event = $events->first();
        return view('registration.volunteer', [
            'event' => $event,
        ]);
    }

    // speakers form
    public function register_form()
    {
        $events = Event::all();
        $event = $events->first();
        return view('registration.register_form', [
            'event' => $event,
        ]);
    }

    // partners form
    public function partner_form()
    {
        $events = Event::all();
        $event = $events->first();
        return view('registration.partner_form', [
            'event' => $event,
        ]);
    }

    // volunteer form
    public function volunteer_form()
    {
        $events = Event::all();
        $event = $events->first();
        return view('registration.volunteer_form', [
            'event' => $event,
        ]);
    }

    //beauty of diversity event program
    public function beauty_of_diversity_program()
    {
        return view('events.programs.beauty_of_diversity_program');
    }

    // team member detail page
    public function teammember(Teammember $teammember)
    {
        $events = Event::all();
        $event = $events->first();
        return view('team_member_details', ['event' => $event, 'member' => $teammember]);
    }

    // speaker details page
    public function speaker(Speaker $speaker)
    {
        $events = Event::all();
        $event = $events->first();
        return view('includes.speaker_details', ['event' => $event, 'speaker' => $speaker]);
    }

    // galler page
    public function gallery()
    {
        $events = Event::all();
        $event = $events->first();
        $categories = Category::all();
        return view('gallery.gallery', ['event' => $event, 'categories' => $categories]);
    }

    // single image page
    public function images(Category $category)
    {
        $events = Event::all();
        $event = $events->first();
        $images = $category->images;
        return view('gallery.single_category_page', ['event' => $event, 'images' => $images]);
    }

    public function speaker_evaluation_form()
    {
        $events = Event::all();
        $event = $events->first();
        return view('evaluation.speaker_evaluation_form', [
            'event' => $event,
        ]);
    }

    public function partner_evaluation_form()
    {
        $events = Event::all();
        $event = $events->first();
        return view('evaluation.partner_evaluation_form', [
            'event' => $event,
        ]);
    }

    public function registration()
    {
        $events = Event::all();
        $event = $events->first();
        return view('events.forms.registration', [
            'event' => $event,
        ]);
    }
}
