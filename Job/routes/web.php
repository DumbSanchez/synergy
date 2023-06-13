<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\WelcomeController;
use App\Http\Controllers\Auth\AboutController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome');

Route::get('/about', [AboutController::class, 'AllData'])->middleware('auth')->name('about');
Route::post('/about', [AboutController::class, 'update'])->middleware('auth')->name('update');

Route::get('/reg', [RegisterController::class, 'create'])->middleware('guest')->name('reg');
Route::post('/reg', [RegisterController::class, 'store'])->middleware('guest')->name('regpost');

Route::get('/welcome', [WelcomeController::class, 'create'])->middleware('guest')->name('welcome');
Route::post('/welcome', [WelcomeController::class, 'store'])->middleware('guest');
Route::get('/logout', [WelcomeController::class, 'destroy'])->middleware('auth')->name('logout');
