<?php

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
Route::post('/login', 'AuthController@login');

Route::get('/login', function () {
    return 'Access token is wrong or missing';
})->name('login');

Route::apiResource('/restaurants', 'RestaurantController')->middleware('auth:api'); 
Route::apiResource('/comments', 'CommentController')->middleware('auth:api');


