<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('about-us', function () {
    return view('about-us');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact');

Route::get('/bmi-calculator', function () {
    return view('bmi-calculator');
})->name('bmi');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/classes', function () {
    return view('classes');
})->name('classes');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/bmi-calculator', function () {
    return view('bmi-calculator');
})->name('bmi.calculator');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

require __DIR__.'/auth.php';
