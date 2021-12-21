<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function(){
    return view('login');
});

Route::get('/signup', function(){
    return view('signup');
});

Route::post('/createUser', [AuthController::class, 'createUser']) -> name('createUser');

Route::post('/login', [AuthController::class, 'login']) -> name('login');

Route::get('/game', [AuthController::class, 'game']);

Route::get('/confirm', [AuthController::class, 'confirm']) -> name('confirm');

Route::get('/leaderboard', [AuthController::class, 'leaderboard']);

Route::get('/profile', [AuthController::class, 'profile']);

Route::get('/logout', [AuthController::class, 'logout']) -> name('logout');

Route::get('/deleteAccount', [AuthController::class, 'deleteAccount']) -> name('deleteAccount');

