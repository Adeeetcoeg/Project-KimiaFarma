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
    return view('mooo', [
        "title" => "Home"
    ]);
});
Route::get('/mooo', function () {
    return view('mooo', [
        "title" => "moooS"
    ]);
});
Route::get('/mooo1', function () {
    return view('login.index', [
        "title" => "login test"
    ]);
});
Route::get('/mooo2', function () {
    return view('login.register', [
        "title" => "register test"
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
