<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    sleep(2);
    return Inertia::render('Home');
})->name('home') ;


Route::get('/about', function () {
    sleep(2);
    return Inertia::render('About');
})->name('about') ;

Route::get('/contact', function () {
    sleep(2);
    return Inertia::render('Contact', [
        'email' => 'support@shoppinggonj.com',
        'phone' => '+1 123 456 7890',
        'address' => '123 E-Commerce Street, City, Country',
    ]);
})->name('contact') ;


