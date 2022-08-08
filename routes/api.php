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

Route::get('/alluser', '\App\Http\Controllers\APIController@getAllUser');
Route::get('/user/{id}', '\App\Http\Controllers\APIController@getUser');

Route::post('/login', '\App\Http\Controllers\APIController@login');
//Route::get('/login/{id}', '\App\Http\Controllers\APIController@getUser');

// User API
Route::post('/user/save', '\App\Http\Controllers\APIController@saveuser');

// 1001 UserID API
Route::get('/p1001', '\App\Http\Controllers\APIController@readAll1001');
Route::get('/p1001/{id}', '\App\Http\Controllers\APIController@read1001');

// 1002 UserDirectory API
Route::resource('', '');

// 1003 UserSecurity
Route::resource('', '');

// 1004 UserFolder API
Route::resource('', '');

// 1005 UserPlaylists API
Route::resource('', '');

// 1006 UserFiles API
Route::resource('', '');

// 1007 UserSetting API
Route::resource('', '');

// 1008 LevelingSystem API
Route::resource('/level/all', '\App\Http\Controllers\Asmcp1008LevelingsystemController@getAll');

// 1009 UserStorageLevel API
Route::resource('', '');

