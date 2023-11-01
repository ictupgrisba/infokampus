<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    public function testGetConnection()
    {
        $connection = DB::connection()->getPdo();
        self::assertNotNull($connection);
    }

    public function testDatabaseSingleton()
    {
        $connection1 = DB::connection()->getPdo();
        $connection2 = DB::connection()->getPdo();

        self::assertSame($connection1, $connection2);
    }
}
