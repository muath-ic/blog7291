<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $brains_namespace = 'App\Http\Brains';
    protected $computer_namespace = 'App\Http\Computers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapBrainsApiRoutes();
        $this->mapComputersApiRoutes();
        
        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->computer_namespace)
            ->group(base_path('routes/web.php'));
    }

    
    protected function mapBrainsApiRoutes()
    {
        Route::prefix('brain')
            ->middleware('api')
            ->as('brains.')
            ->namespace($this->brains_namespace)
            ->group(base_path('routes/api.php'));
    }
    
    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapComputersApiRoutes()
    {
        Route::prefix('com')
            ->middleware('api')
            ->as('compoters.')
            ->namespace($this->computer_namespace)
            ->group(base_path('routes/api.php'));
    }
}
