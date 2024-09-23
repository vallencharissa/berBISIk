<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\KamusController;
use App\Http\Controllers\DictionaryController;
use App\Http\Controllers\EventScheduleController;
use App\Http\Controllers\DictionaryLetterController;
use App\Http\Controllers\VolunteerEventController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('beranda');
})->middleware('auth');

Route::get('/register', function(){
    return view('register');
});

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticating'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/register', [UserController::class, 'create'])->name('register')->middleware('guest');
Route::post('/register', [UserController::class, 'store'])->middleware('guest');

Route::get('/kamus', function(){
    return view('kamus');
})->middleware('auth');


Route::get('/tentangKami', function(){
    return view('tentangKami');
})->middleware('auth');

Route::get('/profil', function(){
    return view('profil');
})->middleware('auth');

Route::get('/kamusHuruf', [DictionaryLetterController::class, 'index'])->name('kamus.huruf');

// Route::get('/kamus', [KamusController::class, 'kamus'])->name('kamus')   ;

Route::get('/kamus', [DictionaryController::class, 'index'])->name('kamus');


Route::get('/acara', [EventController::class, 'index']);
Route::get('/acara/{id}', [EventController::class, 'show']);
Route::get('/tambahAcara', [EventController::class, 'create']);
Route::post('/acara', [EventController::class, 'store']);
Route::get('/ubahAcara/{id}', [EventController::class, 'edit']);
Route::put('/ubahAcara/{id}', [EventController::class, 'update']);
Route::get('/ubahJadwalAcara/{id}', [EventScheduleController::class, 'edit']);
Route::put('/ubahJadwalAcara/{id}', [EventScheduleController::class, 'update']);
Route::get('/hapusAcara/{id}', [EventController::class, 'delete']);
Route::delete('/hapusAcara/{id}', [EventController::class, 'destroy']);
// Route::get('/acara', [VolunteerEventController::class, 'index']);
Route::get('/acara/daftarAcara/{id}', [EventController::class, 'register']);
Route::post('/daftarAcara/{id}', [EventController::class, 'confirm']);
Route::get('/volunteer/daftarVolunteer/{id}', [VolunteerEventController::class, 'register']);
Route::post('/daftarVolunteer/{id}', [VolunteerEventController::class, 'confirm']);
// Route::post('/acara/daftarAcara/{id}', [EventController::class, 'confirm']);

Route::get('/tambahPengajar', [InstructorController::class, 'create']);
Route::post('/pengajar', [InstructorController::class, 'store']);

// return redirect('/tambahJadwalAcara?id' . $event->id . '&jumlahSesi' . $eventDetail->session);
Route::get('/tambahJadwalAcara', [EventScheduleController::class, 'create']);
Route::post('/jadwalAcara', [EventScheduleController::class, 'store']);


Route::get('/volunteer/{id}', [VolunteerEventController::class, 'show']);
Route::get('/tambahVolunteer', [VolunteerEventController::class, 'create']);
Route::post('/volunteer', [VolunteerEventController::class, 'store']);
Route::get('/ubahVolunteer/{id}', [VolunteerEventController::class, 'edit']);
Route::put('/ubahVolunteer/{id}', [VolunteerEventController::class, 'update']);
Route::get('/hapusVolunteer/{id}', [VolunteerEventController::class, 'delete']);
Route::delete('/hapusVolunteer/{id}', [VolunteerEventController::class, 'destroy']);

Route::get('/profil', [UserController::class, 'show'])->name('profile.show');
Route::get('/editProfile', [UserController::class, 'edit'])->name('profile.edit');
Route::put('/updateProfile', [UserController::class, 'update'])->name('profile.update');

Route::get('/riwayat/{id}', [UserController::class, 'history'])->name('riwayat');;
Route::get('/penilaian/{eventId}', [ReviewController::class, 'showReviewForm'])->name('showReview');
Route::post('/penilaian', [ReviewController::class, 'submitReview'])->name('submitReview');
