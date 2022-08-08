<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/test/{id}', '\App\Http\Controllers\UserUnauthController@test');

Route::get('/', '\App\Http\Controllers\UserUnauthController@login')->name('login');
Route::get('/login', '\App\Http\Controllers\UserUnauthController@login')->name('login');
Route::post('/login/process', '\App\Http\Controllers\UserUnauthController@loginprocess')->name('login/process');

Route::get('/signin', '\App\Http\Controllers\UserUnauthController@signin')->name('signin');
Route::post('/user/save', '\App\Http\Controllers\UserUnauthController@saveuser')->name('user/save');

Route::get('/password/forgot', '\App\Http\Controllers\UserUnauthController@forgotpassword')->name('password/forgot');
Route::post('/password/forgot/process', '\App\Http\Controllers\UserUnauthController@forgotpasswordprocess')->name('password/forgot/process');

Route::get('/player', '\App\Http\Controllers\PlayerController@index');

//Route::resource('/user', '\App\Http\Controllers\UserController');

// Route::get('/user/check/{id}', '\App\Http\Controllers\UserController@check');
// Route::get('/login', '\App\Http\Controllers\UserController@index');
// Route::post('/login/process', '\App\Http\Controllers\UserController@loginprocess');

// Route::get('/signin', '\App\Http\Controllers\UserController@create');
// Route::post('/user/save', '\App\Http\Controllers\UserController@store');
// Route::put('/user/update/password', '\App\Http\Controllers\UserController@update');
// Route::delete('/user/delete', '\App\Http\Controllers\UserController@destroy');

Route::put('/user/update/information', '\App\Http\Controllers\Asmcp1001UseridController@update');

Route::get('/aboutus', function () {
    return view('1.about_us', ['title'=>'What We Are?', 'footer'=>1]);
});

Route::get('/storage/levelup', '\App\Http\Controllers\Asmcp1008LevelingsystemController@index');

//Route::get('profile', '\App\Http\Controllers\UserController@profile');
Route::get('profile', function(){
    // this returns the contents of the rendered template to the client as a string
    // return View::make("2.2_profile.profile")->render();
    $view = view("2.2_profile.profile")->render();
    echo response()->json(['html'=>$view]);
});

//Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
