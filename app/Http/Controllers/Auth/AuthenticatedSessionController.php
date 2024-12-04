<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        // if $request->input('role') == 'client' then
        // return redirect()->route('client.dashboard');
        // else if $request->input('role') == 'therapist' then
        // return redirect()->route('therapist.dashboard');
        // will $request->authenticate() work?
        $request->authenticate();

        $request->session()->regenerate();

        // if $request->input('role') == 'client' then
        // return redirect()->route('client.dashboard');
        // else if $request->input('role') == 'therapist' then
        // return redirect()->route('therapist.dashboard');

        if($request->input('role') == 'client') {
            return redirect()->route('client.dashboard');
        } else if($request->input('role') == 'therapist') {
            return redirect()->route('therapist.dashboard');
        } else {
            return null;
        }

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
