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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('trip','App\Http\Controllers\tripController@getTrip');
Route::get('trip/{id}','App\Http\Controllers\tripController@getTripById');
Route::post('addTrip','App\Http\Controllers\tripController@insertTrip');