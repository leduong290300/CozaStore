<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminCustome
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    const ADMIN = 'admin';
    public function handle(Request $request, Closure $next)
    {
        if(Auth::guard(self::ADMIN)->check()) {
          return $next($request);
        }
        return redirect()->route('admin_login');
    }
}
