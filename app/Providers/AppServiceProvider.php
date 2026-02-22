<?php

namespace App\Providers;

use App\Models\Teammember;
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
    }
}
