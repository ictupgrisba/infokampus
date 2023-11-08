<?php

namespace Tests\Http\Controllers;

use Tests\TestCase;

class EventPostControllerTest extends TestCase
{
    /*public function testPostEventSuccess()
    {
        $data = [];
        $this->post('/api/posts', $data)->assertStatus(200)
    }*/

    public function testGetAllPostEventSuccess()
    {
        $this->get('/api/posts')->assertStatus(200);
    }
}
