<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about-me');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/send-email', 'ContactController@sendEmail')->name('send-email');

