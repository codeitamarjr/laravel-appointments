<?php

namespace Codeitamarjr\LaravelAppointments;

use Illuminate\Support\ServiceProvider;

class LaravelAppointmentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish Configuration
        $this->publishes([
            __DIR__ . '/config/laravel-appointments.php' => config_path('laravel-appointments.php'),
        ], 'config');

        // Publish Migrations
        $this->publishes([
            __DIR__ . '/database/migrations/' => database_path('migrations'),
        ], 'migrations');

        // Publish Seeders
        $this->publishes([
            __DIR__ . '/database/seeders/' => database_path('seeders'),
        ], 'seeders');

        // Publish Factories
        $this->publishes([
            __DIR__ . '/database/factories/' => database_path('factories'),
        ], 'factories');

        // Publish Controllers
        $this->publishes([
            __DIR__ . '/Http/Controllers/' => app_path('Http/Controllers'),
        ], 'controllers');

        // Publish Models
        $this->publishes([
            __DIR__ . '/Http/Models/' => app_path('Models'),
        ], 'models');

        // Publish Traits
        $this->publishes([
            __DIR__ . '/Traits/' => app_path('Traits'),
        ], 'traits');

        // Publish Tests
        $this->publishes([
            __DIR__ . '/../Tests/' => base_path('Tests'),
        ], 'tests');

        // Publish Notifications
        $this->publishes([
            __DIR__ . '/../Notifications/' => app_path('Notifications'),
        ], 'notifications');

        // Load Migrations
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    public function register()
    {
        // Merge the configuration file
        $this->mergeConfigFrom(
            __DIR__ . '/config/laravel-appointments.php',
            'laravel-appointments'
        );
    }
}
