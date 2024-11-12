<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ValidUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $data): Response
    {

        if(Auth::user()->role == $data) {
            return $next($request);
        }elseif(Auth::user()->role == "1") {
            return redirect()->route('user_dash');
        }else{
            return redirect()->route('login');
        }
    }
}
