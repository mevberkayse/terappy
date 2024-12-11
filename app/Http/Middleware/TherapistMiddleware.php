<?php

namespace App\Http\Middleware;

use App\Models\Therapist;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TherapistMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if session('role') == 'therapist' and session('user_id') exists in therapists table then
        // return $next($request);
        // else
        // return redirect()->route('index');
        if (session('role') == 'therapist' && session('user_id') != null && Therapist::where('id', session('user_id'))->exists()) {
            return $next($request);
        } else {
            return redirect()->route('index');
        }
        return $next($request);
    }
}
