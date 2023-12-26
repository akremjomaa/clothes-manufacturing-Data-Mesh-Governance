<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        /*$consul = $this->app->make(Consul::class);

        // Enregistrement du microservice dans Consul
        $consul->register([
            'name' => 'fabrication-microservice', // Nom du microservice
            'address' => '127.0.0.1', // Adresse du microservice
            'port' => 8081, // Port du microservice
            'tags' => ['manufactoring'], // Balises pour le microservice

        ]);*/
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
