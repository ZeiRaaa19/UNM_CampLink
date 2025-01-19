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

        $infoLogin = ['email' => $request->email, 'password' => $request->password];

        if (Auth::attempt($infoLogin)) {
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.approvalmitra');
            } else if (Auth::user()->role == 'partner') {
                return redirect()->route('partner.databooking');
            } else if (Auth::user()->role == 'user') {
                return redirect()->route('user.camp1');
            }
        } else {
            return redirect()->back()->withErrors('email atau password salah')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout(); // Logout pengguna
        return redirect()->route('login.view');
    }

}

