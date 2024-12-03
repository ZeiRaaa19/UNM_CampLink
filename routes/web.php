<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

//ADMIN
Route::get('/approvalmitra', function () {
    return view('admin.approvalmitra'); 
})->name('approvalmitra');

Route::get('/listtransaksi', function () {
    return view('admin.listtransaksi'); 
})->name('listtransaksi');

Route::get('/report', function () {
    return view('admin.report'); 
})->name('report');

Route::get('/settingpayment', function () {
    return view('admin.settingpayment'); 
})->name('settingpayment');

//PARTNER
Route::get('/databooking', function () {
    return view('partner.databooking.databooking'); 
})->name('databooking');

Route::get('/edittenda', function () {
    return view('partner.olahtenda.edittenda'); 
})->name('edittenda');

Route::get('/formtenda', function () {
    return view('partner.olahtenda.formtenda'); 
})->name('formtenda');

Route::get('/tambahtenda', function () {
    return view('partner.olahtenda.tambahtenda'); 
})->name('tambahtenda');

Route::get('/dashboard', function () {
    return view('partner.dashboard'); 
})->name('dashboard');


// Rute untuk menampilkan halaman login
Route::get('/index', function () {
    return view('index'); // Pastikan 'index' sesuai dengan lokasi file index.blade.php Anda
})->name('index');

// Rute untuk menampilkan halaman login
Route::get('/login', function () {
    return view('auth.login'); // Pastikan 'auth.login' sesuai dengan lokasi file login.blade.php Anda
})->name('login');

// Rute untuk menampilkan halaman registrasi
Route::get('/register', function () {
    return view('auth.register'); // Pastikan Anda memiliki view ini
})->name('register');

Route::get('partner', function () {
    return view('auth.partner'); // Pastikan Anda memiliki view ini
})->name('partner');

//
Route::get('/camp1', function () {
    return view('user.camp1'); // Pastikan Anda memiliki view ini
})->name('camp1');

//
Route::get('/invoice', function () {
    return view('user.invoice'); // Pastikan Anda memiliki view ini
})->name('invoice');


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