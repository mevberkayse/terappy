<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User_to_therapist_matching;

class ClientController extends Controller
{
    //
    public function dashboard(Request $request)
    {
        $matches = User_to_therapist_matching::where('user_id', Auth::id())->get();
        return view('client.dashboard', ['matches' => $matches]);
    }
}
