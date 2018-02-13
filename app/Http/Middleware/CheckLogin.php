<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Closure;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->get('logged_in') == false || $request->session()->get('logged_in') == '') {
            return redirect('/sso');
        }

        return $next($request);
    }
}