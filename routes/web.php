<?php

use App\Http\Requests\RegisterRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', function (RegisterRequest $request) {
    return redirect('dashboard');
});

Route::get('/dashboard', function () {
    return view('welcome');
});