<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Event;

class EventController extends Controller
{
    // صفحة جميع الأحداث
    public function index()
    {

        $events = Event::withCount(['speakers', 'partners', 'teammembers']);

        $year = request('year');
        $type = request('type');

        $events = Event::when($year, function ($query) use ($year) {
            $query->whereYear('date', $year);
        })
            ->when($type, function ($query) use ($type) {
                $query->where('type', $type);
            })
            ->orderBy('date', 'desc')
            ->get();

        $years = Event::selectRaw('YEAR(date) as year')
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year');

        return view('events.index', compact('events', 'years'));
    }

    public function show(Event $event)
    {
        $event->load([
            'speakers',
            'teammembers',
            'partners',
            'testimonials'
        ]);

        $partners = $event->partners()->get();

        return view('events.show', compact('event', 'partners'));

    }
}
