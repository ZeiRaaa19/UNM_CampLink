<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


// Rute untuk menampilkan halaman login
Route::get('/', function () {
    return view('index'); // Pastikan 'index' sesuai dengan lokasi file index.blade.php Anda
})->name('index');

//? middleware
// Rute untuk menampilkan halaman login
Route::get('/login', function () {
    return view('auth.login'); // Pastikan 'auth.login' sesuai dengan lokasi file login.blade.php Anda
})->name('login');

// Rute untuk menampilkan halaman registrasi
Route::get('/register', function () {
    return view('auth.register'); // Pastikan Anda memiliki view ini
})->name('register');


//? ADMIN
Route::get('/admin/approvalmitra', function () {
    return view('admin.approvalmitra');
})->name('admin.approvalmitra');

Route::get('/admin/listtransaksi', function () {
    return view('admin.listtransaksi');
})->name('admin.listtransaksi');

Route::get('/admin/report', function () {
    return view('admin.report');
})->name('admin.report');

Route::get('/admin/settingpayment', function () {
    return view('admin.settingpayment');
})->name('admin.settingpayment');

//? PARTNER
Route::get('/partner/databooking', function () {
    return view('partner.databooking.databooking');
})->name('partner.databooking');

Route::get('/partner/edittenda', function () {
    return view('partner.olahtenda.edittenda');
})->name('partner.edittenda');

Route::get('/partner/listtenda', function () {
    return view('partner.olahtenda.listtenda');
})->name('partner.listtenda');

Route::get('/partner/tambahtenda', function () {
    return view('partner.olahtenda.tambahtenda');
})->name('partner.tambahtenda');

Route::get('/partner/dashboard', function () {
    return view('partner.dashboard');
})->name('partner.dashboard');

// Route::get('/partner', function () {
//     return view('auth.partner'); // Pastikan Anda memiliki view ini
// })->name('partner');


//? USER
Route::get('/user/camp1', function () {
    return view('user.camp1'); // Pastikan Anda memiliki view ini
})->name('user.camp1');

Route::get('/user/invoice', function () {
    return view('user.invoice'); // Pastikan Anda memiliki view ini
})->name('user.invoice');


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