<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add-user/{id}', [App\Http\Controllers\newUsersController::class, 'store'])->name('home');
Route::get('/delete-user/{id}', [App\Http\Controllers\newUsersController::class, 'destroy'])->name('home');
Route::post('/search-user', [App\Http\Controllers\newUsersController::class, 'searchUser'])->name('home');