<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\User_to_therapist_matching;
use App\Models\Therapist;
use App\Models\TherapistSeminar;
use Illuminate\Container\Attributes\Auth;

class RegisterTherapistController extends Controller
{
    public function step_1(Request $request)
    {
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



        if ($firstName == null || $lastName == null || $password == null | $password_r == null || $age == null || $country == null || $phone == null || $email == null || $gender == null || $social == null || $socail == null) {
            return response()->json([
                'status' => 'error',
                'message' => 'All fields are required',
                'data' => $request->input()->all()
            ]);
        }

        // check if the email is already registered
        $user = User::where('email', $email)->first();
        if ($user) {
            return response()->json([
                'status' => 'error',
                'message' => 'Email is already registered'
            ]);
        }
        // check if the email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Email is not valid'
            ]);
        }
        if (strlen($password) < 6) {
            return response()->json([
                'status' => 'error',
                'message' => 'Password must be at least 6 characters'
            ]);
        }

        if ($password !== $password_r) {
            return response()->json([
                'status' => 'error',
                'message' => 'Passwords do not match'
            ]);
        }

        // check if the phone is registered
        $user = User::where('phone_number', $phone)->first();
        if ($user) {
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
            'socail' => $socail
        ]);

        return response()->json([
            'status' => true,
            'link' => route('register.therapist.step_2')
        ]);
    }
    public function step_2(Request $request)
    {

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

    public function step_3(Request $request)
    {
        $ozelSelect = $request->input('ozelSelect');
        $dilSelect = $request->input('dilSelect');
        $fileInput = $request->file('fileInput');
        $deneyim = $request->input('deneyim');
        $cesitSelect = $request->input('cesitSelect');
    
        if (!$ozelSelect || !$dilSelect || !$fileInput || !$deneyim || !$cesitSelect) {
            return response()->json([
                'status' => 'error',
                'message' => 'All fields are required',
                'data' => $request->input()
            ]);
        }
        $filePath = null;
        if ($fileInput) {
            $fileName = time() . '_' . $fileInput->getClientOriginalName();
            $filePath = $fileInput->storeAs('uploads', $fileName, 'public');
        }
    
        $request->session()->put('register_therapist_step_3', [
            'ozelSelect' => $ozelSelect,
            'dilSelect' => $dilSelect,
            'fileInput' => $filePath,
            'deneyim' => $deneyim,
            'cesitSelect' => $cesitSelect
        ]);
    
        return response()->json([
            'status' => true,
            'link' => route('register.therapist.step_4')
        ]);
    }
    
    public function step_4(Request $request){
        $about = $request->input('about');

        // Boş alan kontrolü
        if (empty($about)) {
            return response()->json([
                'status' => false,
                'message' => 'Lütfen kendinizden bahsedin.',
            ]);
        }

        // Session'a kaydet
        $request->session()->put('register_therapist_step_4', [
            'about' => $about,
        ]);

        // Başarılı işlem sonrası yönlendirme
        return response()->json([
            'status' => true,
            'link' => route('register.therapist.step_5'), // Bir sonraki adımın rotası
        ]);
        

    }

    public function step_5(Request $request){

        $seminars = $request->only([
            'seminar1', 'seminar2', 'seminar3', 'seminar4', 'seminar5',
            'seminar6', 'seminar7', 'seminar8', 'seminar9', 'seminar10'
        ]);

        // En az bir seminer girilmiş mi kontrol et
        $filledSeminars = array_filter($seminars, fn($seminar) => !empty($seminar));

        if (empty($filledSeminars)) {
            return response()->json([
                'status' => false,
                'message' => 'Lütfen en az bir seminer giriniz.',
            ]);
        }

        // Session'a kaydet
        $request->session()->put('register_therapist_step_5', [
            'seminars' => $filledSeminars,
        ]);

        // Başarılı işlem sonrası yönlendirme
        return response()->json([
            'status' => true,
            'link' => route('register.therapist.step_6'), // Bir sonraki adımın rotası
        ]);

}
public function step_6(Request $request)
{
    // Fotoğraf yükleme işlemi
    $photoPath = null;

    if ($request->hasFile('profile_photo')) {
        $file = $request->file('profile_photo');
        $fileName = time() . '_' . $file->getClientOriginalName();  // Dosya adı
        $photoPath = $file->storeAs('profile_photos', $fileName, 'public');  // 'public' diskine kaydet
    }

    $request->session()->put('register_therapist_step_6', [
        'photoPath' => $photoPath
    ]);

    try {
        // Adım verilerini al
        $step1Data = $request->session()->get('register_therapist_step_1');
        $step2Data = $request->session()->get('register_therapist_step_2');
        $step3Data = $request->session()->get('register_therapist_step_3');
        $step4Data = $request->session()->get('register_therapist_step_4');
        $step5Data = $request->session()->get('register_therapist_step_5');
        $step6Data = $request->session()->get('register_therapist_step_6');

        debugbar()->info($step1Data, $step2Data, $step3Data, $step4Data, $step5Data, $step6Data);
        // Veritabanına Kaydetme
        $therapist = new Therapist();
        $therapist->name = $step1Data['firstName'] . ' ' . $step1Data['lastName'];
        $therapist->email = $step1Data['email'];
        $therapist->password = $step1Data['password'];
        $therapist->social_media =$step1Data['social'];
        $therapist->phone_number = $step1Data['phone'];
        $therapist->age = $step1Data['age'];
        $therapist->gender = $step1Data['gender'];
        $therapist->yuksek_lisans = $step2Data['okul2'] ?? null;
        $therapist->education = $step2Data['lisans'];
        $therapist->school = $step2Data['okul'];
        $therapist->start_edu_time = $step2Data['baslangic'];
        $therapist->graduation_time = $step2Data['bitis'];
        $therapist->branch = $step3Data['ozelSelect'];
        $therapist->language = $step3Data['dilSelect'];
        $therapist->CV = $step3Data['fileInput'];
        $therapist->hakkimda = $step4Data['about'];
        $therapist->profile_picture = $step6Data['photoPath'];
        $therapist->save();


        foreach ($step5Data['seminars'] as $key => $seminar) {
            $therapist_seminars = new TherapistSeminar();
            $therapist_seminars->therapist_id = $therapist->id; // İlişkilendirme yapılmalı.
            $therapist_seminars->seminar_name = $seminar;
            $therapist_seminars->save();}

        // Oturum verilerini temizle
        $request->session()->flush();

        return response()->json([
            'status' => true,
            'message' => 'Kayıt işlemi başarıyla tamamlandı!'
        ]);
        
    } catch (\Exception $e) {
        return response()->json([
            'status' => false,
            'message' => 'Bir hata oluştu: ' . $e->getMessage()
        ], 500);
    }
}


}