<?php

namespace App\Providers;

use App\Repositories\IUserRepository;
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
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
