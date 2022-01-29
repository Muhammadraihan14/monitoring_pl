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

Route::get('/', function () {
    return view('home_v');
}); 

Route::get('/about', function () {
    return view('about_v');
});
Route::get('/service', function () {
    return view('service_v');
});
Route::get('/members', function () {
    return view('members_v');
});
Route::get('/contact', function () {
    return view('contact_v');
});
Route::get('/home', function () {
    return view('home_v');
});

Route::get('/login', function () {
    return view('login_v');
});
Route::get('/register', function () {
    return view('register_v');
});



//Route::get('home', linkController::class, 'showHome');