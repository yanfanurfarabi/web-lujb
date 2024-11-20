<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
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
        //
    }

    // protected function authenticated(Request $request, $user)
    // {
    // if ($user->is_admin) {
    //     return redirect('/dashboard');
    // }

    // return redirect('/login');
    // }
}
