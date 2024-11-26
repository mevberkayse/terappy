<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Symptom;
use App\Models\TherapistFeature;
use Illuminate\Http\Request;

class RegisterClientController extends Controller
{
    //
    public function step_1(Request $request) {
        return view('register.client.step_2');
    }
    public function step_2(Request $request) {
        return view('register.client.step_3');
    }
    public function step_3(Request $request) {
        $symptoms = Symptom::all();
        return view('register.client.step_4', ['symptoms' => $symptoms]);
    }
    public function step_4(Request $request) {
        $features = TherapistFeature::all();
        return view('register.client.step_5', ['features' => $features]);
    }
    public function step_5(Request $request) {
        return view('register.client.step_6');
    }

}
