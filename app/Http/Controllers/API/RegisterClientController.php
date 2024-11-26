<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterClientController extends Controller
{
    //

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



        if($firstName == null || $lastName == null || $age == null || $country == null || $phone == null || $email == null || $gender == null || $password == null || $password_r == null) {
            return response()->json([
                'status' => 'error',
                'message' => 'All fields are required'
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

        // check password
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

        // check if the email is valid
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Email is not valid'
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



        // save into session, register_client_step_1
        $request->session()->put('register_client_step_1', [
            'firstName' => $firstName,
            'lastName' => $lastName,
            'age' => $age,
            'country' => $country,
            'phone' => $phone,
            'email' => $email,
            'gender' => $gender,
            'password' => $password
        ]);

        return response()->json([
            'status' => true,
            'link' => route('register.client.step_2')
        ]);
    }

    public function step_2(Request $request) {
        $therapistGender  = $request->input('gender');

        if($therapistGender == null) {
            return response()->json([
                'status' => 'error',
                'message' => 'All fields are required'
            ]);
        }

        // save into session, register_client_step_2
        $request->session()->put('register_client_step_2', [
            'therapistGender' => $therapistGender
        ]);

        return response()->json([
            'status' => true,
            'link' => route('register.client.step_3')
        ]);
    }

    public function step_3(Request $request) {
        $problems = $request->input('problems');
        // join the array by comma
        $problems = implode(',', $problems);

        if($problems == null) {
            return response()->json([
                'status' => 'error',
                'message' => 'All fields are required'
            ]);
        }

        // save into session, register_client_step_3
        $request->session()->put('register_client_step_3', [
            'problems' => $problems
        ]);

        return response()->json([
            'status' => true,
            'link' => route('register.client.step_4')
        ]);

    }

    public function step_4(Request $request) {
        $features = $request->input('features');
        // join the array by comma
        $features = implode(',', $features);

        // save into session, register_client_step_4
        $request->session()->put('register_client_step_4', [
            'features' => $features
        ]);

        return response()->json([
            'status' => true,
            'link' => route('register.client.step_5')
        ]);

    }

    public function step_5(Request $request) {
        $previousTherapy = $request->input('previous_therapy');

        if($previousTherapy == null) {
            return response()->json([
                'status' => 'error',
                'message' => 'All fields are required'
            ]);
        }

        // save into session, register_client_step_5
        $request->session()->put('register_client_step_5', [
            'previousTherapy' => $previousTherapy
        ]);

        // save into database
        $client = new User();
        $client->name = $request->session()->get('register_client_step_1')['firstName'] . ' ' . $request->session()->get('register_client_step_1')['lastName'];
        $client->email = $request->session()->get('register_client_step_1')['email'];
        $client->password = bcrypt($request->session()->get('register_client_step_1')['password']);
        $client->phone_number = $request->session()->get('register_client_step_1')['phone'];
        $client->age = $request->session()->get('register_client_step_1')['age'];
        $client->gender_of_therapist = $request->session()->get('register_client_step_2')['therapistGender'];
        $client->problems = $request->session()->get('register_client_step_3')['problems'];
        $client->therapist_features = $request->session()->get('register_client_step_4')['features'];
        $client->previous_therapy_experience = $request->input('previous_therapy');
        $client->save();

        // clear session
        $request->session()->forget('register_client_step_1');
        $request->session()->forget('register_client_step_2');
        $request->session()->forget('register_client_step_3');
        $request->session()->forget('register_client_step_4');
        $request->session()->forget('register_client_step_5');

        //TODO: match the client with the therapist

        return response()->json([
            'status' => true,
            'link' => route('register.client.step_5')
        ]);

    }
}
