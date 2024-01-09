<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CleanerController;
use App\Http\Controllers\Admin\CleanersController;
use App\Http\Controllers\GuestController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/guests/room_availability_search', [App\Http\Controllers\HomeController::class, 'searchRoom'])->name('searchRoom');
Route::get('/admin/navbar', [App\Http\Controllers\HomeController::class, 'navbar'])->name('navbar');
Route::get('/calendar', [App\Http\Controllers\CalendarController::class, 'showCalendar'])->name('showCalendar');
Route::get('/guest/room', [GuestController::class, 'guestroom'])->name('guestRoom');
Route::get('/guest/detail/{id}', [GuestController::class, 'roomdetail'])->name('roomDetail');


Route::group(['middleware' => 'auth'], function(){
    Route::get('/guests/check_reservation', [App\Http\Controllers\HomeController::class, 'checkReservation'])->name('checkReservation');
    Route::get('/guests/cancel_reservation', [App\Http\Controllers\HomeController::class, 'cancelReservation'])->name('cancelReservation');
    Route::get('/guests/reservation', [App\Http\Controllers\HomeController::class, 'reservation'])->name('reservation');
    Route::get('/guests/reservation_completion', [App\Http\Controllers\HomeController::class, 'reservationCompletion'])->name('reservationCompletion');
    Route::get('/guests/cancel_reservation_completion', [App\Http\Controllers\HomeController::class, 'cancelCompletion'])->name('cancelCompletion');
    Route::get('/guest/guest_reservation_management_page', [App\Http\Controllers\HomeController::class, 'GuestReservationManagementPage'])->name('GuestReservationManagement');
    Route::get('/guest/guest_profile_page', [App\Http\Controllers\HomeController::class, 'GuestProfilePage'])->name('GuestProfilePage');
});

Route::group(['prefix' => 'cleaner', 'as' => 'cleaner.', 'middleware' => 'cleaner'], function(){  
    Route::get('/cleaning_task', [CleanerController::class, 'showCleaningTask'])->name('showTask');//cleaner.showTask
    Route::get('/cleaner_page', [CleanerController::class, 'showCleanerPage'])->name('showCleanerPage');//cleaner.showCleanerPage
  });

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function(){
    #admin
    Route::get('/index', [App\Http\Controllers\AdminController::class, 'showAllRooms'])->name('showAllRooms');//admin.showAllRooms
    Route::get('/create_room', [App\Http\Controllers\AdminController::class, 'showCreateRoom'])->name('showCreateRoom');//admin.showCreateRoom
    Route::get('/room_search', [App\Http\Controllers\AdminController::class, 'showRoomSearch'])->name('showRoomSearch');//admin.showRoomSearch
    
    #admin.cleaner
    Route::get('/check_cleaning_progress_report', [CleanersController::class, 'showCheckCleaningProgressReport'])->name('showCheckCleaningProgressReport');//admin.showCheckCleaningProgressReport
    Route::get('/cleaning_task', [CleanersController::class, 'showCleanersPage'])->name('showCleanersPage');//admin.showCleanersPage
    Route::get('/cleaning_progress_page', [CleanersController::class, 'showCleaningProgressPage'])->name('showCleaningProgressPage');//admin.showCleaningProgressPage
    Route::get('/cleaner_management_page', [CleanersController::class, 'showCleanerManagementPage'])->name('showCleanerManagementPage');//admin.showCleanerManagementPage
    Route::get('/cleaners/modal/cleaner_delete_modal', [CleanersController::class, 'showModalDelete'])->name('showModalDelete');//admin.showModalDelete
    Route::get('/cleaners/create_cleaner', [CleanersController::class, 'showCreateCleanerPage'])->name('showCreateCleanerPage');//admin.showCreateCleanerPage
});











