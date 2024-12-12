<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;


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

// //? middleware
// // Rute untuk menampilkan halaman login
Route::get('/login', function () {
    return view('auth.login'); // Pastikan 'auth.login' sesuai dengan lokasi file login.blade.php Anda
})->name('login');

// Rute untuk menampilkan halaman registrasi
Route::get('/register', function () {
    return view('auth.register'); // Pastikan Anda memiliki view ini
})->name('register');

// Rute untuk Profil
Route::get('/profil', [UserController::class, 'profil'])->name('profil');

// Rute untuk Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/camp1', function () {
    return view('user.camp1'); // Mengarah ke resources/views/user/camp1.blade.php
})->name('user.camp1');

Route::get('/camp2', function () {
    return view('user.camp2'); // Mengarah ke resources/views/user/camp2.blade.php
})->name('user.camp2');

Route::get('/camp3', function () {
    return view('user.camp3'); // Mengarah ke resources/views/user/camp3.blade.php
})->name('user.camp3');

Route::get('/camp4', function () {
    return view('user.camp4'); // Mengarah ke resources/views/user/camp4.blade.php
})->name('user.camp4');

Route::get('/user/invoice', function () {
    return view('user.invoice'); // Mengarah ke resources/views/user/invoice.blade.php
})->name('user.invoice');

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
Route::post('/register', function (Request $request) {
    // Validasi input
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Buat pengguna baru
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password), // Enkripsi password
    ]);

    // Login pengguna setelah registrasi
    Auth::login($user);

    // Redirect ke halaman yang diinginkan setelah registrasi
    return redirect()->route('home'); // Ganti 'home' dengan rute yang sesuai
})->name('register.store'); // Menambahkan nama rute