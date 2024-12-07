<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Therapist;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form..
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account..
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function showTherapist(Request $request)
    {
        $therapist = Therapist::find($request->id);
        return view('therapist-profile', [
            'therapist' => $therapist
        ]);
    }

    public function settings(Request $request)
    {
        return view('settings', [
            'user' => $request->user()
        ]);
    }

    public function loginCustom(Request $request)
    {

        $email = $request->input('email');
        $password = $request->input('password');
        $role = $request->input('role');

        if ($role == 'client') {
           Auth::attempt(['email' => $email, 'password' => $password]);
            if (Auth::check()) {
                return redirect()->route('client.dashboard');
            } else {
                return redirect()->back()->with('error', 'Email or password is incorrect');
            }

        } elseif ($role == 'therapist') {
            $therapist = Therapist::where('email', $email)->first();
            if ($therapist) {
                if (password_verify($password, $therapist->password)) {
                    session(['role' => 'therapist', 'user_id' => $therapist->id]);
                    return redirect()->route('therapist.dashboard');
                } else {
                    return redirect()->back()->with('error', 'Email or password is incorrect');
                }
            } else {
                return redirect()->back()->with('error', 'Email is not registered');
            }
        } else {
            return redirect()->back()->with('error', 'Role is invalid');
        }
    }

    public function userProfile(Request $request)
    {
        $user = Auth::user();
        return view('user-profile', [
            'user' => $user
        ]);
    }
}
