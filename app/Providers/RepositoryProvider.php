<?php

namespace App\Providers;

use App\Repositories\EventRepository;
use App\Repositories\IEventPostRepository;
use App\Repositories\IUserRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(IUserRepository::class, function (){
            return new UserRepository();
        });
        $this->app->singleton(IEventPostRepository::class, function (){
            return new EventRepository();
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
