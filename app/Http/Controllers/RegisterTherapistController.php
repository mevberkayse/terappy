<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Disease;
use Illuminate\Http\Request;

class RegisterTherapistController extends Controller
{
    //

    public function step_1(Request $request) {
        return view('register.therapist.step_2');
    }

    public function step_2(Request $request) {
        return view('register.therapist.step_3');
    }
    public function step_3(Request $request) {
        $diseases = Disease::all();

        return view('register.therapist.step_4', ['diseases' => $diseases]);
    }
}
