<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\PartnerController;


// Rute untuk menampilkan halaman login
Route::get('/', function () {
    return view('index'); // Pastikan 'index' sesuai dengan lokasi file index.blade.php Anda
})->name('home');

//? middleware
Route::middleware(['guest'])->group(function () {

    // Rute untuk menampilkan halaman login
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.view');
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');

    // Rute untuk menampilkan halaman registrasi
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register.view');
    Route::post('/register', [AuthController::class, 'register'])->name('register.store');

});

//? logout
Route::get('/logout', [AuthController::class, 'logout'])->middleware(['auth'])->name('logout');


//? ADMIN
Route::prefix('/admin')->middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/listtransaksi', [AdminController::class, 'listTransaksi'])->name('admin.listtransaksi');
    
    Route::get('/approvalmitra', [AdminController::class, 'approvalMitra'])->name('admin.approvalmitra');

    Route::get('/report', [AdminController::class, 'report'])->name('admin.report');

    Route::get('/settingpayment', [AdminController::class, 'settingpayment'])->name('admin.settingpayment');

});


//? PARTNER

Route::prefix('/partner')->middleware(['auth', 'role:partner'])->group(function () {

    Route::get('/databooking', [PartnerController::class, 'dataBooking'])->name('partner.databooking');

    Route::get('/edittenda', [PartnerController::class, 'editTenda'])->name('partner.edittenda');

    Route::get('/listtenda', [PartnerController::class, 'listTenda'])->name('partner.listtenda');

    Route::get('/tambahtenda', [PartnerController::class, 'tambahTenda'])->name('partner.tambahtenda');

    Route::get('/dashboard', [PartnerController::class, 'dashboard'])->name('partner.dashboard');

});


//? USER

Route::prefix('/users')->middleware(['auth', 'role:user'])->group(function () {
    Route::get('/index', [UserController::class, 'index'])->name('user.index');

    Route::get('/camp', function () {
        return view('user.camp');
    })->name('user.camp');

    Route::get('/invoice', [UserController::class, 'invoice'])->name('user.invoice');

    Route::get('/profil', [UserController::class, 'profil'])->name('user.profil');

    Route::get('/booking', [UserController::class, 'booking'])->name('user.booking');
});

