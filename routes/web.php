<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CleanerController;
use App\Http\Controllers\Admin\CleanersController;

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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});
=======
>>>>>>> 5839bfd9a9168ca357b40cb65765c31d80c33eee

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<<<<<<< HEAD
Route::get('/admin/navbar', [App\Http\Controllers\HomeController::class, 'showTest'])->name('showTest');
=======
Route::get('/cleaner/cleaning_task', [CleanerController::class, 'showCleaningTask'])->name('showTask');

Route::get('/admin/cleaner/cleaning_task', [CleanersController::class, 'showCleanersPage'])->name('showCleanersPage');
>>>>>>> 5839bfd9a9168ca357b40cb65765c31d80c33eee
