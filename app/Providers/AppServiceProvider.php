<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use ManishaPropel\InterfaceRepository\Interfaces\PersonInterface;
use ManishaPropel\InterfaceRepository\Repositories\PersonRepository;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    // public function register(): void
    // {
    //     //
    // }
    public function register()
    {
        $this->app->bind(PersonInterface::class, PersonRepository::class);
    }
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
