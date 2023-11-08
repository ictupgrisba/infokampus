<?php

namespace App\Providers;

use App\Repositories\IEventPostRepository;
use App\Repositories\IUserRepository;
use App\Services\EventPostService;
use App\Services\IEventPostService;
use App\Services\IUserService;
use App\Services\UserService;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class ServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(IUserService::class, function (Application $app){
            $userRepository = $app->make(IUserRepository::class);
            return new UserService($userRepository);
        });
        $this->app->singleton(IEventPostService::class, function (Application $app) {
            $eventPostRepository = $app->make(IEventPostRepository::class);
            return new EventPostService($eventPostRepository);
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
