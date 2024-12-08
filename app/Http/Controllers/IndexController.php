<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

    public function howItWorks()
    {
        return view('how-it-works');
    }

    public function help() {
        return view('help');
    }

    public function about() {
        return view('about-us');
    }

    public function therapists() {
        $therapists = \App\Models\Therapist::all();
        return view('therapists', compact('therapists'));
    }
}
