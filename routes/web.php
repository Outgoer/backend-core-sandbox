<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\HealthController;
use Illuminate\Support\Facades\DB;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/health', [HealthController::class, 'check']);

Route::get('/hello-world', [HelloWorldController::class, 'helloWorld']);

Route::get('/test-azure-mysql-connection', function () {
    try {
        // Try to establish a connection
        DB::connection('mysql_azure')->getPdo();

        return 'Successfully connected to Azure MySQL!';
    } catch (\Exception $e) {
        // Handle connection failure gracefully
        return 'Failed to connect to Azure MySQL. Error: ' . $e->getMessage();
    }
});

Route::get('/', function () {
    return view('welcome');
});
