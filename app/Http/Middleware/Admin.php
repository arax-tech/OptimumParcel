<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
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
        if (Auth::check() && Auth::user()->role()=='Admin')
        {
            return $next($request);
        }
        else
        {
            return redirect('/login')->with('flash_message_error','Please Login to Access...');
        }
    }
}
