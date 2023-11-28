<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

//homepage

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register', function () {return view('auth.register');});

Route::get('/guests/room_availability_search', [App\Http\Controllers\HomeController::class, 'searchRoom'])->name('home');

