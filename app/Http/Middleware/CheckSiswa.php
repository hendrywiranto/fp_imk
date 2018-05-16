<?php

namespace App\Http\Middleware;

use Closure;

class CheckSiswa
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session('user.role')=='siswa') {
            return $next($request);
        } else {
            return redirect()->route('home');
        }
    }
}
