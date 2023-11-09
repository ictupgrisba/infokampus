<?php

namespace App\Providers;

use App\Http\Controllers\EventPostController;
use App\Http\Controllers\IEventPostController;
use App\Http\Controllers\IUserController;
use App\Http\Controllers\UserController;
use App\Services\IUserService;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class ControllerProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(IUserController::class, function (Application $app){
            $userService = $app->make(IUserService::class);
            return new UserController($userService);
        });
        $this->app->singleton(IEventPostController::class, function (Application $app){
            $eventPostService = $app->make(IEventPostController::class);
            return new EventPostController($eventPostService);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
