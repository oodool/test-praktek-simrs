<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    public function handle(Request $request, Closure $next)
    {
        // If not logged in, redirect to login page
        if (!session('user_id')) {
            return redirect()->route('login')->withErrors([
                'auth' => 'Harap login terlebih dahulu.',
            ]);
        }

        // If logged in, continue
        return $next($request);
    }
}