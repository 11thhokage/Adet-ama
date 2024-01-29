<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/register', function() {
    return view('register');
});

Route::get('/home', function() {
    return view('home');
});

Route::get('/contacts', function() {
    return view('contacts');
});
Route::get('/aboutUs', function() {
    return view('aboutUs');
});
Route::get('/todo', function() {
    return view('todo');
});

Route::post('/register',[userController::class, 'register']);