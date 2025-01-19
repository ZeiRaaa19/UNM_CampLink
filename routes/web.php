<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\AuthController;

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


//? ADMIN
Route::prefix('/admin')->middleware('userAkses:admin')->group(function () {
    Route::get('/approvalmitra', [AdminController::class, 'approvalMitra'])->name('admin.approvalmitra');

    Route::get('/listtransaksi', [AdminController::class, 'listTransaksi'])->name('admin.listtransaksi');

    Route::get('/report', [AdminController::class, 'report'])->name('admin.report');

    Route::get('/settingpayment', [AdminController::class, 'settingpayment'])->name('admin.settingpayment');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


//? PARTNER

Route::prefix('/partner')->group(function () {

    Route::get('/databooking', function () {
        return view('partner.databooking');
    })->name('partner.databooking');

    Route::get('/edittenda', function () {
        return view('partner.edittenda');
    })->name('partner.edittenda');

    Route::get('/listtenda', function () {
        return view('partner.listtenda');
    })->name('partner.listtenda');

    Route::get('/tambahtenda', function () {
        return view('partner.tambahtenda');
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


Route::middleware(['guest'])->group(function () {

    // Rute untuk menampilkan halaman login

    //? middleware
    // Rute untuk menampilkan halaman login
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.view');
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');

    // Rute untuk menampilkan halaman registrasi
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.view');
    Route::post('/register', [AuthController::class, 'register'])->name('register.store');

});

Route::get('/', function () {
    return view('index'); // Pastikan 'index' sesuai dengan lokasi file index.blade.php Anda
})->name('index');
