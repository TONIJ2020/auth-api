<?php

use App\Http\Controllers\HelloController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('hello', [HelloController::class, 'hello']);
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('forgot', [\App\Http\Controllers\ForgotController::class, 'forgot']);
Route::post('reset', [\App\Http\Controllers\ForgotController::class, 'reset']);

Route::get('user', [\App\Http\Controllers\AuthController::class, 'user'])->middleware('auth:api');
