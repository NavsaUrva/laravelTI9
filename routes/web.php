<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\FormController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//routing dirinya sendiri
Route::get('/salam', function(){
    return 'Assalamualaikum';
});

//routing mengarahkan ke view
Route::get('/hallo', function(){
    return view ('hallo');
});

Route::get('/hallo2', function(){
    return view ('hallo.halloworld');
});

// Buat route kabar dengan view kondisi
Route::get('/kabar', function () {
    return view('kondisi');
});

// Buat route nilai dengan view nilai
Route::get('/nilai', function () {
    return view('nilai');
});

// Buat route nilai dengan view pasien
Route::get('/pasien', function () {
    return view('pasien');
});

Route::get('/kesehatan', function () {
    return view('kesehatan');
});

Route::get('/Form', [FormController::class, 'index']);

Route::post('/hasil', [FormController::class, 'store']);

Route::get('/skill', [SkillController::class, 'index']);

Route::post('/skillhasil', [SkillController::class, 'skillhasil']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

