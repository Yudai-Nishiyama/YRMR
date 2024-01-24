<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CleanerController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\Auth\FacebookController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Admin\GuestsController;
use App\Http\Controllers\Admin\CleanersController;
use App\Http\Controllers\SearchController;



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

//homepage
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Guests Routes
Route::prefix('guests')->name('guests.')->group(function () {
    // Route::post('/room-availability-search', [SearchController::class, 'search']);
    Route::get('/room-availability-search', [HomeController::class, 'searchRoom'])->name('roomAvailabilitySearch');
    Route::post('/room-searcher', [HomeController::class, 'roomSearcher'])->name('roomSearcher');
    Route::get('/check-reservation/{id}', [HomeController::class, 'checkReservation'])->name('checkReservation');
    Route::get('/reservation/{room}', [HomeController::class, 'reservation'])->name('reservation');
    Route::get('/cancel-reservation/{id}', [HomeController::class, 'cancelReservation'])->name('cancelReservation');
    Route::get('/reservation-completion', [HomeController::class, 'reservationCompletion'])->name('reservationCompletion');
    Route::get('/cancel-reservation-completion', [HomeController::class, 'cancelCompletion'])->name('cancelCompletion');
    Route::get('/rooms', [GuestController::class, 'guestroom'])->name('guestRoom');
    Route::get('/detail', [GuestController::class, 'roomdetail'])->name('roomDetail');
    Route::post('/reservation/{room}',[GuestController::class, 'reserveRoom'])->name('reserveRoom');
});

//Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/navbar', [HomeController::class, 'navbar'])->name('navbar');

    // Admins Rooms Routes
    Route::prefix('rooms')->name('rooms.')->group(function () {
        Route::get('/index', [AdminController::class, 'showAllRooms'])->name('showAllRooms');//admin.rooms.showAllRooms
        Route::get('/create_room', [AdminController::class, 'showCreateRoom'])->name('showCreateRoom');//admin.rooms.showCreateRoom
        Route::get('/room_search', [AdminController::class, 'showRoomSearch'])->name('showRoomSearch');//admin.rooms.showRoomSearch
    });

    // Admins Cleaners Routes
    Route::prefix('cleaners')->name('cleaners.')->group(function () {
        Route::get('/cleaning_task', [CleanersController::class, 'showCleanersPage'])->name('showCleanersPage');//admin.cleaners.~~~~
        Route::get('/cleaning_progress_page', [CleanersController::class, 'showCleaningProgressPage'])->name('showCleaningProgressPage');
        Route::get('/check_cleaning_progress_report', [CleanersController::class, 'showCheckCleaningProgressReport'])->name('showCheckCleaningProgressReport');
        Route::get('/modal/cleaner_delete_modal', [CleanersController::class, 'showModalDelete'])->name('showModalDelete');
        Route::get('/cleaner_management_page', [CleanersController::class, 'CleanerManagementPage'])->name('CleanerManagementPage');
        Route::get('/create_cleaner', [CleanersController::class, 'showCreateCleanerPage'])->name('showCreateCleanerPage');
        Route::post('/store', [CleanersController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [CleanersController::class, 'edit'])->name('edit');
        Route::put('/cleaners/{id}/update', [CleanersController::class, 'update'])->name('update');
        Route::delete('/{id}', [CleanersController::class, 'destroy'])->name('cleaner.destroy');
    });

    // Admins Guests Routes
    Route::prefix('guests')->name('guests.')->group(function () {
        Route::get('/reservation_management', [GuestsController::class, 'guestReservationManagement'])->name('guestReservationManagement');
        Route::get('/profile/{id}', [GuestsController::class, 'guestProfile'])->name('guestProfile');
    });
});

// Cleaner Routes
Route::group(['prefix' => 'cleaner', 'as' => 'cleaner.', 'middleware' => 'cleaner'], function(){  
    Route::get('/cleaning_task/{id}', [CleanerController::class, 'showCleaningTask'])->name('showTask');//cleaner.showTask
    Route::get('/cleaner_page', [CleanerController::class, 'showCleanerPage'])->name('showCleanerPage');//cleaner.showCleanerPage
    Route::get('/cleaning_task/reservationtask/{id}', [CleanerController::class, 'showReservationTask'])->name('showReservationTask');//cleaner.showReservationTask
    Route::post('/cleaner_page/post/{id}', [CleanerController::class, 'addCleaning'])->name('addCleaning');//cleaner.addCleaning
    Route::delete('/cleaner_page/delete/{id}', [CleanerController::class, 'deleteCleaning'])->name('deleteCleaning');//cleaner.deleteCleaning
});


// Calender Routes
Route::get('/calendar', [CalendarController::class, 'showCalendar'])->name('showCalendar');

Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

Route::get('/auth/facebook', [FacebookController::class, 'redirectToFacebook'])->name('facebook.login');
Route::get('/auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback'])->name('facebook.callback');
