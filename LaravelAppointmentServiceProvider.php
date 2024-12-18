<?php

namespace Codeitamarjr\LaravelAppointments;

use Illuminate\Support\ServiceProvider;

class LaravelAppointmentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish the configuration file
        $this->publishes([
            __DIR__.'/../config/laravel-appointments.php' => config_path('laravel-appointments.php'),
        ], 'config');

        // Publish Database
        $this->publishes([
            __DIR__.'/../database/' => database_path(),
        ], ['database', 'migrations', 'seeders', 'factories']);

        // Publish Models
        $this->publishes([
            __DIR__.'/Models/' => app_path('Models'),
        ], 'models');

        // Publish Tests
        $this->publishes([
            __DIR__.'/Tests/' => base_path('tests'),
        ], 'tests');

        // Publish Controllers
        $this->publishes([
            __DIR__.'/Http/controllers/' => app_path('Http/controllers'),
        ], 'controllers');

        // Publish Notifications
        $this->publishes([
            __DIR__.'/Notifications/' => app_path('Notifications'),
        ], 'notifications');

        // Load the package migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
