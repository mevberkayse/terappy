<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use App\Models\Therapist;
use App\Models\User_to_therapist_matching;
use App\Models\therapist_rating;

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

    public function profile(Request $request)
    {
        $therapist = Therapist::where('id', session('user_id'))->first();
        if ($therapist == null) {
            return redirect()->route('index');
        }
        $matches = [];
        $matchRecords = User_to_therapist_matching::where('therapist_id', $therapist->id)->get();
        foreach ($matchRecords as $record) {
            $client = User::where('id', $record->user_id)->first();
            $matches[] = [
                'client' => $client,
                'match' => $record->percantage,
                'rate' => therapist_rating::where('therapist_id', $therapist->id)->where('user_id', $client->id)->first()['rate'] ?? null
            ];
        }
        $possibleClients = User::where('choosing_therapist', $therapist->id)->get();
        return view('therapist.profile', ['therapist' => $therapist, 'matches' => $matches, 'possibleClients' => $possibleClients]);
    }

    public function match(Request $request)
    {
        $therapist = Therapist::where('id', session('user_id'))->first();
        if ($therapist == null) {
            return redirect()->route('index');
        }
        $client_id = $request->input('user_id');
        $client = User::where('id', $client_id)->first();
        if ($client == null) {
            return response()->json([
                'status' => 'error',
                'message' => 'Client not found'
            ]);
        }
        // create User_to_therapist_matching record
        $match = new User_to_therapist_matching();
        $match->user_id = $client->id;
        $match->therapist_id = $therapist->id;
        $match->percantage = $this->calculateMatch($client, $therapist);
        $match->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Client matched successfully'
        ]);
    }

    private function calculateMatch($client, $therapist)
    {

        $clientProblems = explode(',', $client->problems);
        $therapistBranch = explode(',', $therapist->branch);
        $clientFeatures = explode(',', $client->therapist_features);
        $therapistFeatures = explode(',', $therapist->features);

        $match = 0;

        if ($client->gender_of_therapist == 'doesnt_matter') {
            $match += 1;
        } else if ($client->gender_of_therapist == $therapist->gender) {
            $match += 1;
        }

        if ($client->previous_therapy_experience == 'yes') {
            $match += 1;
        }

        foreach ($clientProblems as $problem) {
            if (in_array($problem, $therapistBranch)) {
                $match += 1;
            }
        }

        foreach ($clientFeatures as $feature) {
            if (in_array($feature, $therapistFeatures)) {
                $match += 1;
            }
        }


        $match = ceil(($match / (count($clientProblems) + count($clientFeatures) + 2)) * 100);

        return $match;
    }
}
