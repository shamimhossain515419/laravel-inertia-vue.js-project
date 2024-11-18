<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');


Route::get('/about', function () {
    return Inertia::render('About');
})->name('about');

Route::get('/contact', function () {
    return Inertia::render('Contact', [
        'email' => 'support@shoppinggonj.com',
        'phone' => '+1 123 456 7890',
        'address' => '123 E-Commerce Street, City, Country',
    ]);
})->name('contact');

Route::get('/register', function () {
    return Inertia::render('Auth/Register');
})->name('register');

Route::post("/register", [AuthController::class, "register"])->name("register");
