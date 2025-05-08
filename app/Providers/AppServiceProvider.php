<?php

namespace App\Providers;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        Gate::define("show-employer-jobs", function (User $user,  Employer $employer) {
            return $user->id === $employer->user_id;
        });
    }
}
