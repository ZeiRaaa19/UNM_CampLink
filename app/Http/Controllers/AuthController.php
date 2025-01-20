<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan ini sesuai dengan path view Anda
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Redirect berdasarkan role pengguna
            if (Auth::user()->role === 'admin') {
                return redirect('/admin/listtransaksi?tab=listtransaksi');
            } elseif (Auth::user()->role === 'partner') {
                return redirect('/partner/dashboard?tab=dashboard');
            } elseif (Auth::user()->role === 'user') {
                return redirect()->route('user.index');
            }
        }

        return redirect()->back()->withErrors('email or password is incorrect')->withInput();
    }

    public function logout()
    {
        Auth::logout(); // Logout pengguna
        return redirect('/')->with('success', 'You have been logged out.'); // Redirect ke homepage
    }


    public function showRegistrationForm()
    {
        return view('auth.register'); // Ganti dengan path view register Anda
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        User::create([
            'username' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }

}

