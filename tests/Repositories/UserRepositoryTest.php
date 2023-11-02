<?php

namespace Tests\Repositories;

use App\Repositories\IUserRepository;
use App\Models\User;
use Tests\TestCase;

class UserRepositoryTest extends TestCase
{
    public function testSaveUserSuccess()
    {
        $request = new User();
        $request->toModel(
            username: 'utifmd', role: 'ADMIN', password: '121212'
        );
        $user = $this->userRepository->save($request);
        self::assertSame($user->username, $request->username);
        self::assertSame($user->role, $request->role);
        self::assertSame($user->password, $request->password);
    }
}
