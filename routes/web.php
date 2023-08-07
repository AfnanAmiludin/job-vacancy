<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\jobVacancyController;
use Illuminate\Support\Facades\Route;

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
    return view('login');
})->name('login')->middleware('guest');
Route::get('/register', function () {
    return view('register');
});
Route::get('/register/alumni', function () {
    return view('regis-alumni');
});
Route::get('/register/dosen', function () {
    return view('regis-admin');
});
Route::post('/login', [authController::class, 'login']);
Route::post('/regis', [authController::class, 'registrasi']);
Route::post('/admin', [authController::class, 'regisAdmin']);
Route::post('/alumni', [authController::class, 'regisAlumni']);
Route::post('/logout', [authController::class, 'logout'])->name('logout');
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/add', function () {
        return view('add');
    });
    Route::get('/confirm', [adminController::class, 'confirm']);
    Route::get('/actionConfirm/{data}', [adminController::class, 'dataUser']);
    Route::get('/card', [jobVacancyController::class, 'show']);
    Route::post('/create', [jobVacancyController::class, 'create']);
    Route::get('download/{id}', [jobVacancyController::class, 'download']);
});
Route::middleware(['auth:sanctum', 'adminMiddleware'])->group(function () {
    Route::get('/confirm', [adminController::class, 'confirm']);
    Route::get('/actionConfirm/{data}', [adminController::class, 'dataUser']);
});
