<?php

use App\Http\Controllers\API\RegisterClientController as APIRegisterClientController;
use App\Http\Controllers\API\RegisterTherapistController as APIRegisterTherapistController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterClientController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegisterTherapistController;
use App\Http\Controllers\TherapistController;
use App\Models\Therapist;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/yardim', [IndexController::class, 'help']);
Route::get('/settings', [ProfileController::class, 'settings']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// for guard "therapist"
Route::get('/therapist-dashboard', [TherapistController::class, 'dashboard'])->middleware('therapist')->name('therapist.dashboard');
Route::get('/client-dashboard', [ClientController::class, 'dashboard'])->name('client.dashboard');
Route::get('/user-profile', [ProfileController::class, 'userProfile'])->name('user.profile.show');
Route::post('/login-custom', [ProfileController::class, 'loginCustom'])->name('login.custom');
Route::post('/therapist/rate', [ProfileController::class, 'rateTherapist'])->middleware('auth');
Route::post('/profile/update-name', [ProfileController::class, 'updateName'])->name('profile.update-name');
Route::post('/profile/update-email', [ProfileController::class, 'updateEmail'])->name('profile.update.email');

Route::get('/terapist/profil/{id}', [ProfileController::class, 'showTherapist'])->name('therapist.profile.show');
Route::get('/nasil-calisir', [IndexController::class, 'howItWorks']);
Route::get('/kayit', [RegisterController::class, 'show']);
Route::prefix('/kayit/danisan')->group(function () {
    Route::get('/1', [RegisterClientController::class, 'step_1'])->name('register.client.step_1');
    Route::get('/2', [RegisterClientController::class, 'step_2'])->name('register.client.step_2');
    Route::get('/3', [RegisterClientController::class, 'step_3'])->name('register.client.step_3');
    Route::get('/4', [RegisterClientController::class, 'step_4'])->name('register.client.step_4');
    Route::get('/5', [RegisterClientController::class, 'step_5'])->name('register.client.step_5');
});

Route::prefix('/kayit/terapist')->group(function () {
    Route::get('/1', [RegisterTherapistController::class, 'step_1'])->name('register.therapist.step_1');
    Route::get('/2', [RegisterTherapistController::class, 'step_2'])->name('register.therapist.step_2');
    Route::get('/3', [RegisterTherapistController::class, 'step_3'])->name('register.therapist.step_3');
    Route::get('/4', [RegisterTherapistController::class, 'step_4'])->name('register.therapist.step_4');
    Route::get('/5', [RegisterTherapistController::class, 'step_5'])->name('register.therapist.step_5');
    Route::get('/6', [RegisterTherapistController::class, 'step_6'])->name('register.therapist.step_6');
});

Route::prefix('api')->group(function () {
    Route::prefix('/kayit/danisan')->group(function () {
        Route::post('/1', [APIRegisterClientController::class, 'step_1']);
        Route::post('/2', [APIRegisterClientController::class, 'step_2']);
        Route::post('/3', [APIRegisterClientController::class, 'step_3']);
        Route::post('/4', [APIRegisterClientController::class, 'step_4']);
        Route::post('/5', [APIRegisterClientController::class, 'step_5']);
    });

    Route::prefix('/kayit/terapist')->group(function () {
        Route::post('/1', [APIRegisterTherapistController::class, 'step_1']);
        Route::post('/2', [APIRegisterTherapistController::class, 'step_2']);
        Route::post('/3', [APIRegisterTherapistController::class, 'step_3']);
        Route::post('/4', [APIRegisterTherapistController::class, 'step_4']);
        Route::post('/5', [APIRegisterTherapistController::class, 'step_5']);
        Route::post('/6', [APIRegisterTherapistController::class, 'step_6']);
    });
});
require __DIR__ . '/auth.php';
