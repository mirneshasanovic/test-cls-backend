<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StatusController;

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

//AddClient
Route::post('addClient', 'App\Http\Controllers\ClientController@addClient');

//Get Status
Route::get('getStatus', 'App\Http\Controllers\StatusController@getStatus');

//Get Country
Route::get('getCountry', 'App\Http\Controllers\CountryController@getCountry');

//Get Industry
Route::get('getIndustry', 'App\Http\Controllers\IndustryController@getIndustry');

//Get Contact
Route::get('getContact', 'App\Http\Controllers\ContactController@getContact');

//Get City
Route::get('getCities', 'App\Http\Controllers\CityController@getCities');

//Update City
Route::put('editCity/{id}/','App\Http\Controllers\CityController@editCity');

//Show specific City
Route::get('showCity/{id}','App\Http\Controllers\CityController@showCity');

//Delete city
Route::delete('deleteCity/{id}/','App\Http\Controllers\CityController@deleteCity');
