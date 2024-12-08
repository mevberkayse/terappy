<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use App\Models\Therapist;

class TherapistController extends Controller
{
    //



    public function dashboard(Request $request)
    {
        $therapist = Therapist::where('id', session('user_id'))->first();
        if ($therapist == null) {
            return redirect()->route('index');
        }
        debugbar()->info('Therapist dashboard');
        $matches = User::where('choosing_therapist', $therapist->id)->get();
        return view('therapist.dashboard', ['matches' => $matches]);
    }

    public function profile(Request $request) {
        $therapist = Therapist::where('id', session('user_id'))->first();
        if ($therapist == null) {
            return redirect()->route('index');
        }
        $matches = User::where('choosing_therapist', $therapist->id)->get();
        return view('therapist.profile', ['therapist' => $therapist, 'matches' => $matches]);
    }
}
