<?php

namespace App\Providers;

use App\Models\Partner;
use App\Models\Teammember;
use App\Models\Testimonial;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('includes.members', function ($view) {
            $coreTeamMembers = Teammember::where('department', 'Core team')->get();
            $view->with('coreTeamMembers', $coreTeamMembers);
        });

        // View::composer('includes.members', function ($view) {
        //     $members = Teammember::with('events')->get();
        //     $view->with('members', $members);
        // });


        View::composer('includes.team', function ($view) {
            $members = Teammember::with('events')->get();
            $view->with('members', $members);
        });

        

        View::composer('home', function ($view) {
            $partners = Partner::all();
            $performers = Partner::where('type', 'performance')->get();
            $testimonials = Testimonial::get();

            $view->with([
                'testimonials' => $testimonials,
                'partners' => $partners,
                'performers' => $performers
            ]);
        });
    }
}
