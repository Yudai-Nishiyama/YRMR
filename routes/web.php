<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CleanerController;
use App\Http\Controllers\Admin\CleanersController;
use App\Http\Controllers\GuestController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cleaner/cleaning_task', [CleanerController::class, 'showCleaningTask'])->name('showTask');

Route::get('/admin/cleaner/cleaning_task', [CleanersController::class, 'showCleanersPage'])->name('showCleanersPage');
Route::get('/admin/navbar', [App\Http\Controllers\HomeController::class, 'navbar'])->name('navbar');

Route::get('/guest/home', [GuestController::class, 'guesthome'])->name('guestHome');
Route::get('/guest/room', [GuestController::class, 'guestroom'])->name('guestRoom');


