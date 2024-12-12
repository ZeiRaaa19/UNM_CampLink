<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan ini sesuai dengan path view Anda
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Redirect berdasarkan role pengguna
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->route('admin.report'); // Ganti dengan route dashboard admin
            } elseif ($user->role === 'partner') {
                return redirect()->route('partner.dashboard'); // Ganti dengan route dashboard partner
            } else {
                return redirect()->route('user.index'); // Ganti dengan route dashboard user
            }
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function logout()
    {
        Auth::logout(); // Logout pengguna
        return redirect('/')->with('success', 'You have been logged out.'); // Redirect ke homepage
    }
    
}

