<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Middleware\DemoMiddleware;

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

Route::get('/', function () {
    return view('home');
});

// Route::get('/demo/{num1}/{num2}', [DemoController::class, 'demo']);

Route::get('/hello1/{key}', [DemoController::class, 'demoaction1'])->middleware([DemoMiddleware::class]);

Route::get('/hello2', [DemoController::class, 'demoaction2']);


