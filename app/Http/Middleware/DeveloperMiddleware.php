<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Developer\DeveloperController;

class DeveloperMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $developer = DeveloperController::getDeveloper();

        if(Auth::check() && $developer){
            return $next($request);
        }else{
            return response()->view('auth.401', [], 401);
        }
    }
}
