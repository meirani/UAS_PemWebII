<?php

use App\Models\User;
use App\Models\Hotel;
use App\Models\Kamar;
use App\Models\Reservasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservasiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/hotels', function () {
    $hotel = Hotel::all();
    return view('hotels', ['hotels' => $hotel]);
})->middleware(['auth', 'verified'])->name('hotels');

Route::resource('/hotel', HotelController::class)->middleware(['auth', 'verified']);

Route::get('/kamars', function () {
    $kamar = Kamar::all();
    return view('kamars', ['kamars' => $kamar]);
})->middleware(['auth', 'verified'])->name('kamars');

Route::resource('/kamar', KamarController::class)->middleware(['auth', 'verified']);

Route::get('/reservasis', function () {
    $reservasi = Reservasi::all();
    return view('reservasis', ['reservasis' => $reservasi]);
})->middleware(['auth', 'verified'])->name('reservasis');

Route::resource('/reservasi', ReservasiController::class);

Route::get('/tamus', function () {
    $reservasi = Reservasi::all();
    return view('tamus', ['reservasis' => $reservasi]);
})->middleware(['auth', 'verified'])->name('tamus');

Route::get('/users', function () {
    $user = User::all();
    return view('users', ['users' => $user]);
})->middleware(['auth', 'verified'])->name('users');

Route::resource('/user', UserController::class);

require __DIR__ . '/auth.php';
