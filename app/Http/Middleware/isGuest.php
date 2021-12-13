<?php

namespace App\Http\Middleware;

use App\Providers\AppServiceProvider;
use Naventum\Framework\Illuminate\Support\Facades\Auth;
use Naventum\Framework\Illuminate\Support\Middleware;

class isGuest implements Middleware
{
    /**
     * Handle an incoming request.
     */
    public function handle()
    {
        if (Auth::user()) {
            return redirect(AppServiceProvider::HOME);
        }

        return true;
    }
}
