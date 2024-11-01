<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route ke halaman Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route ke halaman Profile
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

// Route ke halaman Settings
Route::get('/settings', function () {
    return view('settings');
})->name('settings');

// Route untuk Logout
Route::post('/logout', function () {
    // Logika logout (Anda bisa mengganti ini dengan auth logout)
    Auth::logout();
    return redirect('/login');
})->name('logout');