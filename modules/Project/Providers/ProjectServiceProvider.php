<?php

namespace Modules\Project\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Facades\Route;

class ProjectServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__  . '/../Resources/views', 'Project');
        $this->loadTranslationsFrom(__DIR__  . '/../Resources/lang', 'Project');
        $this->registerConfig();
        $this->registerWebRoutes();
        $this->registerApiRoutes();
        $this->loadMigrationsFrom(__DIR__  . '/../Database/Migrations');
        $this->registerFactories();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    public function registerWebRoutes()
    {
        Route::middleware('web')->namespace('Modules\Project\Http\Controllers')
            ->group(__DIR__  . '/../Routes/web.php');
    }
    public function registerApiRoutes()
    {
      Route::prefix('api')->middleware('api')->namespace('Modules\Project\Http\Controllers')
            ->group(__DIR__  . '/../Routes/api.php');
    }
    public function registerFactories()
    {
        if (! $this->app->environment('production')) {
            $this->app->make(Factory::class)->load(__DIR__ . '/../Database/Factories');
        }
    }

     protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/project.php' => config_path('project.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../Config/project.php', 'project'
        );
    }
}
