<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;

interface IUserController
{
    function register(): UserResource;
}
