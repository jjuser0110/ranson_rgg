<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function createOTP(){
        return rand(100000, 999999);
    }

    public function create_order_code(){
        $randomCode = Str::upper(Str::random(5));
        $timestamp = time();
        return $randomCode . $timestamp;
    }
}
