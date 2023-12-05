<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CleanerController;
use App\Http\Controllers\Admin\CleanersController;
use App\Http\Controllers\AdminController;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin/index', [App\Http\Controllers\AdminController::class, 'showAllRooms'])->name('showAllRooms');
Route::get('/admin/create_room', [App\Http\Controllers\AdminController::class, 'showCreateRoom'])->name('showCreateRoom');

Route::get('/cleaners/cleaning_task', [CleanerController::class, 'showCleaningTask'])->name('showTask');
Route::get('/cleaners/cleaner_page', [CleanerController::class, 'showCleanerPage'])->name('showCleanerPage');

Route::get('/admins/cleaners/cleaning_task', [CleanersController::class, 'showCleanersPage'])->name('showCleanersPage');
Route::get('/admins/cleaners/cleaning_progress_page', [CleanersController::class, 'showCleaningProgressPage'])->name('showCleaningProgressPage');
Route::get('/admins/cleaners/check_cleaning_progress_report', [CleanersController::class, 'showCheckCleaningProgressReport'])->name('showCheckCleaningProgressReport');
Route::get('/admins/cleaners/modal/cleaner_delete_modal', [CleanersController::class, 'showModalDelete'])->name('showModalDelete');


