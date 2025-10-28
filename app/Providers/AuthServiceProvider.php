<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Gate::define('admin', function (User $user) {
            return in_array($user->email, [
                'info@petitpomskyduquebec.ca',
                'pomskyduquebec@hotmail.com',
                'johanniestyves@gmail.com',
            ]);
        });
    }
}
