<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RumahSakitController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Pasiens Login
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// Pasiens Home
Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

// Rumah Sakit Route
Route::get('rumah-sakit', [RumahSakitController::class, 'index'])->name('rumahSakit.index')->middleware('auth');
Route::get('rumah-sakit/create', [RumahSakitController::class, 'create'])->name('rumahSakit.create')->middleware('auth');
Route::post('rumah-sakit', [RumahSakitController::class, 'store'])->name('rumahSakit.store')->middleware('auth');
Route::get('rumah-sakit/{id}/edit', [RumahSakitController::class, 'edit'])->name('rumahSakit.edit')->middleware('auth');
Route::put('rumah-sakit/{id}', [RumahSakitController::class, 'update'])->name('rumahSakit.update')->middleware('auth');
Route::delete('rumah-sakit/{id}/delete', [RumahSakitController::class, 'destroy'])->name('rumahSakit.destroy')->middleware('auth');


// Pasiens Route
Route::get('pasiens', [PasienController::class, 'index'])->name('pasiens.index')->middleware('auth');
Route::get('pasiens/create', [PasienController::class, 'create'])->name('pasiens.create')->middleware('auth');
Route::post('pasiens', [PasienController::class, 'store'])->name('pasiens.store')->middleware('auth');
Route::get('pasiens/{id}/edit', [PasienController::class, 'edit'])->name('pasiens.edit')->middleware('auth');
Route::put('pasiens/{id}', [PasienController::class, 'update'])->name('pasiens.update')->middleware('auth');
Route::delete('pasiens/{id}/delete', [PasienController::class, 'destroy'])->name('pasiens.destroy')->middleware('auth');