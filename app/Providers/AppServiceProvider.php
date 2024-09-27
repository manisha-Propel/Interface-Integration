<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use ManishaPropel\InterfaceRepository\Interfaces\PersonInterface;
use ManishaPropel\InterfaceRepository\Repositories\PersonRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * This method is called when the application is bootstrapping services.
     * You can bind interfaces to their implementations here.
     */
    public function register()
    {
        // Bind the PersonInterface to the PersonRepository implementation
        $this->app->bind(PersonInterface::class, PersonRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * This method is called after all services are registered.
     * You can perform any additional setup here if needed.
     */
    public function boot()
    {
        // You can add bootstrapping logic here if required
    }
}
