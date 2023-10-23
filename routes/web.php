<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
use App\Models\Reservation;
use App\Models\Room;

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
// Route::controller(AuthController::class)->group(function() {
//     //register form 
//     Route::get('/register', 'register')->name('auth.register');
//     //store register
//     Route::post('/store', 'store')->name('auth.store');
//     //login form
//     Route::get('/login', 'login')->name('auth.login');
//     //auth proses
//     Route::post('/auth', 'auth')->name('auth.authentication');
//     //logout
//     Route::post('/logout', 'logout')->name('auth.logout');
//     //dashboard page
//     Route::get('/dashboard', 'dashboard')->name('dashboard');
// });


Route::get('register', [AuthController::class, 'showSignUpForm']);
Route::post('/signup', [AuthController::class, 'signUp']);

Route::get('login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);



Route::get('/', function () {
    return view('welcome');
});
// Route::get('/login', function () {
//     return view('auth.login');
// });
// Route::get('/', function () {
//     return view('auth.register');
// });
Route::get('dashboard', function () {
    return view('auth.dashboard');
});

Route::get('kamar', function () {
    return view('kamar');
});
Route::get('akun', function () {
    return view('akun');
});
Route::get('edit', function () {
    return view('editAkun');
});

Route::get('standar', function () {
    return view('kamar.standar');
});
Route::get('family', function () {
    return view('kamar.family');
});
Route::get('deluxe', function () {
    return view('kamar.deluxe');
});
Route::get('superior', function () {
    return view('kamar.superior');
});
Route::get('twin', function () {
    return view('kamar.twin');
});
Route::get('single', function () {
    return view('kamar.single');
});
Route::get('double', function () {
    return view('kamar.double');
});
Route::get('suite', function () {
    return view('kamar.suite');
});
Route::get('smoking', function () {
    return view('kamar.smoking');
});
Route::get('conect', function () {
    return view('kamar.conect');
});
// Route::get('showall', function () {
//     return view('showall');
// });
// Route::get('reservasi', function () {
//     $reservations = Reservation::all();
//     return view('reservations', compact('reservations'));
// });
// Route::get('kamar', function () {
//     $rooms = Room::all();
//     return view('kamar', compact('rooms'));
// });
Route::resource('/reservations', ReservationController::class);
Route::resource('/rooms', RoomController::class);
Route::get('/kembali', [ReservationController::class, 'index'])->name('reservations.index');