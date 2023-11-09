<?php

namespace App\Helper;

use Illuminate\Http\Response;
use Throwable;

abstract class Helper
{
    static function getResponse(Throwable $throwable): Response
    {
        $errors = explode("|", $throwable->getMessage(), 2);

        return isset($errors[1])
            ? response(["errors" => [$errors[0] => $errors[1]]], $throwable->getCode())
            : response(["errors" => ["all" => $errors[0]]],500);
    }
}
