<?php

use App\Models\User;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Validator;


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.store');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.store');


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/approvalmitra', [AdminController::class, 'approvalmitra'])->name('admin.approvalmitra');
    Route::get('/admin/listtransaksi', [AdminController::class, 'listtransaksi'])->name('admin.listtransaksi');
    Route::get('/admin/report', [AdminController::class, 'report'])->name('admin.report');
    Route::get('/admin/settingpayment', [AdminController::class, 'settingpayment'])->name('admin.settingpayment');
});

// Rute untuk Partner
Route::middleware(['auth', 'role:partner'])->group(function () {
    Route::get('partner/dashboard', [PartnerController::class, 'dashboard'])->name('partner.dashboard');
    Route::get('partner/tambahtenda', [PartnerController::class, 'tambahTenda'])->name('partner.tambahtenda');
    Route::post('partner/savetenda', [PartnerController::class, 'savetenda'])->name('partner.savetenda');
    Route::get('partner/listtenda', [PartnerController::class, 'listTenda'])->name('partner.listtenda');
    Route::get('partner/edittenda/{id}', [PartnerController::class, 'editTenda'])->name('partner.edittenda');
    Route::get('partner/databooking', [PartnerController::class, 'dataBooking'])->name('partner.databooking');
});

// Rute untuk User
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/index', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/invoice', [UserController::class, 'invoice'])->name('user.invoice');
    Route::post('/user/bookingcamp', [UserController::class, 'bookingcamp'])->name('user.bookingcamp');
    Route::get('/user/profil', [UserController::class, 'profil'])->name('user.profil');
});
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

// Rute untuk Profil
Route::get('/profil', [UserController::class, 'profil'])->name('profil');

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

// //? ADMIN
// Route::get('/admin/approvalmitra', function () {
//     return view('admin.approvalmitra');
// })->name('admin.approvalmitra');

// Route::get('/admin/listtransaksi', function () {
//     return view('admin.listtransaksi');
// })->name('admin.listtransaksi');

// Route::get('/admin/report', function () {
//     return view('admin.report');
// })->name('admin.report');

// Route::get('/admin/settingpayment', function () {
//     return view('admin.settingpayment');
// })->name('admin.settingpayment');

// //? PARTNER
// Route::get('/partner/databooking', function () {
//     return view('partner.databooking.databooking');
// })->name('partner.databooking');

// Route::get('/partner/edittenda', function () {
//     return view('partner.olahtenda.edittenda');
// })->name('partner.edittenda');

// Route::get('/partner/listtenda', function () {
//     return view('partner.olahtenda.listtenda');
// })->name('partner.listtenda');

// Route::get('/partner/tambahtenda', function () {
//     return view('partner.olahtenda.tambahtenda');
// })->name('partner.tambahtenda');

// Route::get('/partner/dashboard', function () {
//     return view('partner.dashboard');
// })->name('partner.dashboard');


// //? USER
// Route::get('/user/camp1', function () {
//     return view('user.camp1'); // Pastikan Anda memiliki view ini
// })->name('user.camp1');

// Route::get('/user/invoice', function () {
//     return view('user.invoice'); // Pastikan Anda memiliki view ini
// })->name('user.invoice');


// Rute untuk menangani pengiriman formulir registrasi
// Route::post('/register', function (Request $request) {
    
// })->name('register.store'); // Menambahkan nama rute