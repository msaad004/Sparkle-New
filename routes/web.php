<?php

use App\Http\Controllers\Controller;
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

Route::get('/signup', function() {
    return view('signup');
});

Route::post('/register', [Controller::class, 'register']);

Route::get('/login', function() {
    return view('login');
});

Route::get('/', function () {
    return view('index');
});

Route::get('post', function() {
    return view('add-post');
});

Route::get('profile', function () {
    return view('own-profile');
});

Route::get('help', function () {
    return view('get-help');
});