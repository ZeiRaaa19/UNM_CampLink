<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Validator;


// Rute untuk menampilkan halaman login
Route::get('/', function () {
    return view('index'); // Pastikan 'index' sesuai dengan lokasi file index.blade.php Anda
})->name('index');

//? middleware
// Rute untuk menampilkan halaman login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('view.login');

// Rute untuk menampilkan halaman registrasi
Route::get('/register', [LoginController::class, 'showRegisterForm'])->name('register');


//? ADMIN
Route::prefix('/admin')->middleware('auth:admin')->group(function () {
    Route::get('/approvalmitra', function () {
        return view('admin.approvalmitra');
    })->name('admin.approvalmitra');

    Route::get('/listtransaksi', function () {
        return view('admin.listtransaksi');
    })->name('admin.listtransaksi');

    Route::get('/report', function () {
        return view('admin.report');
    })->name('admin.report');

    Route::get('/settingpayment', function () {
        return view('admin.settingpayment');
    })->name('admin.settingpayment');
});


//? PARTNER

Route::prefix('/partner')->middleware('auth:partner')->group(function () {

    Route::get('/databooking', function () {
        return view('partner.databooking.databooking');
    })->name('partner.databooking');

    Route::get('/edittenda', function () {
        return view('partner.olahtenda.edittenda');
    })->name('partner.edittenda');

    Route::get('/listtenda', function () {
        return view('partner.olahtenda.listtenda');
    })->name('partner.listtenda');

    Route::get('/tambahtenda', function () {
        return view('partner.olahtenda.tambahtenda');
    })->name('partner.tambahtenda');

    Route::get('/dashboard', function () {
        return view('partner.dashboard');
    })->name('partner.dashboard');

});

// Route::get('/partner', function () {
//     return view('auth.partner'); // Pastikan Anda memiliki view ini
// })->name('partner');


//? USER

Route::prefix('/users')->middleware('auth:user')->group(function () {
    Route::get('/camp1', function () {
        return view('user.camp1'); // Pastikan Anda memiliki view ini
    })->name('user.camp1');

    Route::get('/invoice', function () {
        return view('user.invoice'); // Pastikan Anda memiliki view ini
    })->name('user.invoice');

});


// Rute untuk menangani pengiriman formulir registrasi
Route::post('/register', function (Request $request) {
    
})->name('register.store'); // Menambahkan nama rute