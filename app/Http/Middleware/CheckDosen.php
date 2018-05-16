<?php

namespace App\Http\Middleware;

use Closure;

class CheckDosen
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
        if (session('user.role')=='dosen') {
            return $next($request);
        } else {
            return redirect()->route('home');
        }
    }
}
