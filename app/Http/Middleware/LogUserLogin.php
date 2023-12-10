<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;

class LogUserLogin
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if (Auth::check()) {
            $userId = Auth::id();
            $ipAddress = Request::ip();

            // Log user login
            DB::table('user_logins')->insert([
                'user_id' => $userId,
                'ip_address' => $ipAddress,
                'login_at' => now(),
            ]);
        }

        return $response;
    }
}