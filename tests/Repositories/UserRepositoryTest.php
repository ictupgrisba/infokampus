<?php

namespace Tests\Repositories;

use App\Repositories\IUserRepository;
use App\Models\User;
use Tests\TestCase;

class UserRepositoryTest extends TestCase
{
    private IUserRepository $userRepository;
    protected function setUp(): void
    {
        parent::setUp();
        $this->userRepository = $this->app->make(IUserRepository::class);
        $this->userRepository->destroyAll();
    }
    public function testSaveUserSuccess()
    {
        $request = new User();
        $request->toModel(
            username: 'utifmd', role: 'ADMIN', password: '121212'
        );
        $user = $this->userRepository->save($request);
        self::assertSame($user->username, $request->username);
    }
}
