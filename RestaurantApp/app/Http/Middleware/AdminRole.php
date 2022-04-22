<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class AdminRole
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
        if(Auth::check() && Auth::user()->role=='admin')
            return $next($request);
        else
            return redirect()->back()->with('status', 'bạn không có quyền truy cập');
    }
}
