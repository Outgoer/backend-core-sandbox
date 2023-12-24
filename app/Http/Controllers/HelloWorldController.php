<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class HelloWorldController extends Controller
{
    public function helloWorld(): JsonResponse
    {
        return response()->json(['message' => 'Hello, World!']);
    }
}
