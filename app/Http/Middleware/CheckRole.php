<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$role): Response
    {
        // Cek apakah pengguna terautentikasi
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->role == 'admin' && !$request->is('admin/*')) {
                return abort(403); // Mengembalikan respons 403 Forbidden
            }

            if ($user->role == 'partner' && !$request->is('partner/*')) {
                return abort(403); // Mengembalikan respons 403 Forbidden
            }
            
            if ($user->role == 'user' && !$request->is('user/*')) {
                return abort(403); // Mengembalikan respons 403 Forbidden
            }
            
            // Cek apakah pengguna memiliki role yang diinginkan
            if (in_array($user->role, $role)) {
                return $next($request);
            }
        }

        // Jika user tidak memiliki role yang diinginkan, redirect ke halaman lain (misalnya home)
        return redirect('/home');
    }
}
