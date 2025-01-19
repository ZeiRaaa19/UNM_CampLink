<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$role): Response
    {
        dd(auth()->user()->role);
        if (auth()->user()->role == $role) {
            return $next($request);
        } else {
            return response()->json(['anda tidak diperbolehkan mengakses halaman ini!']);
        }
    }
}
