<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class RegisterTherapistController extends Controller
{
    public function step_1(Request $request) {
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $age = $request->input('age');
        $country = $request->input('country');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $gender = $request->input('gender');
        $password = $request->input('password');
        $password_r = $request->input('password_r');
        $social = $request->input('social');
        $socail = $request->input('socail');



        if($firstName == null || $lastName == null || $password == null| $password_r == null || $age == null || $country == null || $phone == null || $email == null || $gender == null || $social == null || $socail == null) {
            return response()->json([
                'status' => 'error',
                'message' => 'All fields are required', 'data'=> $request->input()->all()
            ]);
        }

        // check if the email is already registered
        $user = User::where('email', $email)->first();
        if($user) {
            return response()->json([
                'status' => 'error',
                'message' => 'Email is already registered'
            ]);
        }
        // check if the email is valid
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Email is not valid'
            ]);
        }
        if(strlen($password) < 6) {
            return response()->json([
                'status' => 'error',
                'message' => 'Password must be at least 6 characters'
            ]);
        }

        if($password !== $password_r) {
            return response()->json([
                'status' => 'error',
                'message' => 'Passwords do not match'
            ]);
        }

        // check if the phone is registered
        $user = User::where('phone_number', $phone)->first();
        if($user) {
            return response()->json([
                'status' => 'error',
                'message' => 'Phone number is already registered'
            ]);
        }

        // save into session, register_therapist_step_1
        $request->session()->put('register_therapist_step_1', [
            'firstName' => $firstName,
            'lastName' => $lastName,
            'age' => $age,
            'country' => $country,
            'phone' => $phone,
            'email' => $email,
            'gender' => $gender,
            'password' => $password,
            'social' => $social,
            'socail'=> $socail        ]);

        return response()->json([
            'status' => true,
            'link' => route('register.therapist.step_2')
        ]);
    }
    public function step_2(Request $request) {
        
    $lisans = $request->input('lisans');
    $okul = $request->input('okul');
    $baslangic = $request->input('baslangic');
    $bitis = $request->input('bitis');
    $lisans2 = $request->input('lisans2');
    $okul2 = $request->input('okul2');
    $baslangic2 = $request->input('baslangic2');
    $bitis2 = $request->input('bitis2');

    $yuksekLisans = $request->input('yuksekLisansCheckbox');

    if ($lisans == null || $okul == null || $baslangic == null || $bitis == null) {
        return response()->json([
            'status' => 'error',
            'message' => 'Lisans bilgileri zorunludur.'
        ]);
    }

    if (isset($yuksekLisans) && $yuksekLisans && ($lisans2 == null || $okul2 == null || $baslangic2 == null || $bitis2 == null)) {
        return response()->json([
            'status' => 'error',
            'message' => 'Yüksek lisans bilgileri eksik.'
        ]);
    }

    $request->session()->put('register_therapist_step_2', [
        'lisans' => $lisans,
        'okul' => $okul,
        'baslangic' => $baslangic,
        'bitis' => $bitis,
        'lisans2' => $lisans2,
        'okul2' => $okul2,
        'baslangic2' => $baslangic2,
        'bitis2' => $bitis2,
    ]);

    return response()->json([
        'status' => true,
        'link' => route('register.therapist.step_3')
    ]);
}
    
    public function step_3(Request $request) {
        $ozelSelect = $request->input('ozelSelect');
        $dilSelect = $request->input('dilSelect');
        $fileInput = $request->file('fileInput');

        if($ozelSelect == null || $dilSelect == null || $fileInput == null) {
            return response()->json([
                'status' => 'error',
                'message' => 'All fields are required'
            ]);
        }

        // save into session, register_client_step_5
        $request->session()->put('register_client_step_3', [
            'ozelSelect' => $ozelSelect,
            'dilSelect'=> $dilSelect,
            'fileInput'=> $fileInput
                ]);

        // save into database
        $therapist = new User();
        $therapist->name = $request->session()->get('register_therapist_step_1')['firstName'] . ' ' . $request->session()->get('register_therapist_step_1')['lastName'];
        $therapist->email = $request->session()->get('register_therapist_step_1')['email'];
        $therapist->social_media= bcrypt($request->session()->get('register_therapist_step_1')['social']);
        $therapist->phone_number = $request->session()->get('register_therapist_step_1')['phone'];
        $therapist->education = $request->session()->get('register_therapist_step_2')['lisans'];
        $therapist->school = $request->session()->get('register_therapist_step_2')['okul'];
        $therapist->start_edu_time = $request->session()->get('register_therapist_step_2')['baslangic'];
        $therapist->graduation_time = $request->session()->get('register_therapist_step_2')['bitis'];
        $therapist->branch = $request->session()->get('register_therapist_step_3')['ozelSelect'];
        $therapist->language = $request->session()->get('register_therapist_step_3')['dilSelect'];
        $therapist->CV = $request->session()->get('register_therapist_step_3')['fileInput'];


        $therapist->save();

        // clear session
        $request->session()->forget('register_therapist_step_1');
        $request->session()->forget('register_therapist_step_2');
        $request->session()->forget('register_therapist_step_3');

        //TODO: match the client with the therapist

        return response()->json([
            'status' => true,
            'link' => route('register.client.step_3')
        ]);

    }

    }

