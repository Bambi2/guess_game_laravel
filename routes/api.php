<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Profile;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users/{id}', function($id) {
    $user = User::find($id);

    return ([
        'id' => $user->id,
        'name' => $user->name
    ]);
});

Route::get('/profiles/{id}', function($id) {
    $profile = Profile::find($id);
    $user = $profile->user;
    $user_info = array(
        "id" => $user->id,
        "name" => $user->name,
    );
    return ([
        'id' => $profile->id,
        'score' => $profile->score,
        'user' => $user_info
    ]);
});