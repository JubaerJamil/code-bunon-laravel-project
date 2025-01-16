<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    protected $namespace = 'App\Http\Controllers';
    public const HOME = '/home';

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Route::middleware('web')
        ->namespace($this->namespace)
        ->group(base_path('routes/backend.php'));

        Route::middleware('web')
        ->namespace($this->namespace)
        ->group(base_path('routes/frontend.php'));
    }
}
