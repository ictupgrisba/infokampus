<?php

namespace Tests;

use App\Repositories\IUserRepository;
use App\Services\IUserService;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    protected IUserRepository $userRepository;
    protected IUserService $userService;
    protected function setUp(): void
    {
        parent::setUp();
        $this->userRepository = $this->app->make(IUserRepository::class);
        $this->userService = $this->app->make(IUserService::class);

        $this->userRepository->destroyAll();
    }
}
