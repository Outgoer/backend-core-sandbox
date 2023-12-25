<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class HealthController extends Controller
{
    /**
     * Health check endpoint.
     *
     * @return JsonResponse
     */
    public function check(): JsonResponse
    {
        return response()->json(['status' => 'OK']);
    }
}
