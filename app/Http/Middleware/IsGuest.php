<?php

namespace App\Http\Middleware;

use Naventum\Framework\Illuminate\Support\Facades\Auth;
use Naventum\Framework\Illuminate\Support\Middleware;

class IsGuest implements Middleware
{
    /**
     * Handle an incoming request.
     */
    public function handle($next, $closure)
    {
        if (Auth::user()) {
            return redirect('/');
        }

        return $next($closure);
    }
}
