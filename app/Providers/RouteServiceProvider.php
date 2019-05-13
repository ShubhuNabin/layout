<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

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
        $this->mapApiRoutes();

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
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));

        Route::middleware('web')
             ->namespace($this->namespace.'\About')
             ->group(base_path('routes/route_about.php'));

        Route::middleware('web')
             ->namespace($this->namespace.'\Gallery')
             ->group(base_path('routes/route_gallery.php'));

        Route::middleware('web')
             ->namespace($this->namespace.'\Contact')
             ->group(base_path('routes/route_contact.php'));

        Route::middleware('web')
             ->namespace($this->namespace.'\Services')
             ->group(base_path('routes/route_services.php'));

        Route::middleware('web')
             ->namespace($this->namespace.'\Home')
             ->group(base_path('routes/route_home.php'));

        Route::middleware('web')
             ->namespace($this->namespace.'\Blog')
             ->group(base_path('routes/route_blog.php'));

        Route::middleware('web')
             ->namespace($this->namespace.'\Admin')
             ->group(base_path('routes/route_admin.php'));

        Route::middleware('web')
             ->namespace($this->namespace.'\Admin\Posts')
             ->group(base_path('routes/route_admin_posts.php'));

        Route::middleware('web')
             ->namespace($this->namespace.'\Admin\Users')
             ->group(base_path('routes/route_admin_users.php'));

        Route::middleware('web')
             ->namespace($this->namespace.'\Admin\History')
             ->group(base_path('routes/route_admin_history.php'));

        Route::middleware('web')
             ->namespace($this->namespace.'\Admin\Manage')
             ->group(base_path('routes/route_admin_manage.php'));

        Route::middleware('web')
             ->namespace($this->namespace.'\Admin\Category')
             ->group(base_path('routes/route_admin_category.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
