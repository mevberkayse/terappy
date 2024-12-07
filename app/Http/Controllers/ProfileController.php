<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Therapist;
use App\Models\therapist_rating;
use App\Models\User;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form..
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account..
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function showTherapist($id)
    {
        $therapist = Therapist::findOrFail($id);
        return view('profile.showTherapist', compact('therapist'));
    }

    public function settings(Request $request)
    {
        return view('profile.settings', [
            'user' => $request->user(),
        ]);
    }

    public function loginCustom(Request $request)
    {
        // Login işlemleri burada yapılacak
    }

    public function userProfile(Request $request)
    {
        $user = Auth::user();
        return view('profile.user-profile', [
            'user' => $user
        ]);
    }

    public function rateTherapist(Request $request)
    {
        $request->validate([
            'therapist_id' => 'required|exists:therapists,id',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $therapistRating = new therapist_rating();
        $therapistRating->therapist_id = $request->therapist_id;
        $therapistRating->user_id = Auth::user()->id; // Oturumdaki kullanıcıyı al
        $therapistRating->rating = $request->rating;
        $therapistRating->save();

        return response()->json(['message' => 'Değerlendirmeniz Alındı!']);
    }

    public function updateName(Request $request)
    {
        $user = $request->user();

        // İsim validasyonu
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        try {
            // Yeni ismi kullanıcıya ata
            $user->name = $request->input('name');
            $user->save(); // Veritabanına kaydet

            // Başarı durumu döndür
            return response()->json([
                'success' => true,
                'message' => 'İsim başarıyla güncellendi',
            ]);

        } catch (\Exception $e) {
            // Hata durumunda hata mesajı döndür
            return response()->json([
                'success' => false,
                'message' => 'Bir hata oluştu: ' . $e->getMessage(),
            ], 500);  // 500 sunucu hatası
        }
    }

    public function updateEmail(Request $request)
    {
        $user = $request->user();

        // Email validasyonu
        $request->validate([
            'email' => 'required|string|email|max:255',
        ]);

        try {
            // Yeni emaili kullanıcıya ata
            $user->email = $request->input('email');
            $user->save(); // Veritabanına kaydet

            // Başarı durumu döndür
            return response()->json([
                'success' => true,
                'message' => 'Email başarıyla güncellendi',
            ]);

        } catch (\Exception $e) {
            // Hata durumunda hata mesajı döndür
            return response()->json([
                'success' => false,
                'message' => 'Bir hata oluştu: ' . $e->getMessage(),
            ], 500);  // 500 sunucu hatası
        }
    }
}
