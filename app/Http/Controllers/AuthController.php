<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan ini sesuai dengan path view Anda
    }

    /**
     * Handle an authentication attempt.
     *
     * Validates the incoming request and attempts to log in the user using the provided
     * email and password. If successful, redirects the user to their respective dashboard
     * based on their role (admin, partner, or user). If authentication fails, redirects
     * back to the login form with an error message and the previous input.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */

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

    /**
     * Logout pengguna dan redirect ke homepage
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout(); // Logout pengguna
        return redirect('/')->with('success', 'You have been logged out.'); // Redirect ke homepage
    }

    /**
     * Show the form for registering a new user.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('auth.register'); // Ganti dengan path view register Anda
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ],[
            'username.required' => 'Username harus diisi',
            'email.required' => 'Email harus diisi',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 8 karakter',
            'password.confirmed' => 'Password tidak cocok',
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login.view')->with('success', 'Registration successful! Please log in.');
    }

}

