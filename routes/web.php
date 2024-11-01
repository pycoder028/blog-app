<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index']);

Route::get('login',[AuthController::class, 'login']);

Route::get('register',[AuthController::class, 'register']);
Route::post('register',[AuthController::class, 'create_user']);

Route::get('forgot-password',[AuthController::class, 'forgotPassword']);