<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User_to_therapist_matching;
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
        $matches = User_to_therapist_matching::where('therapist_id', $therapist->id)->get();
        return view('therapist.dashboard', ['matches' => $matches]);
    }

    public function profile(Request $request) {
        $therapist = Therapist::where('id', session('user_id'))->first();
        if ($therapist == null) {
            return redirect()->route('index');
        }
        return view('therapist.profile', ['therapist' => $therapist]);
    }
}
