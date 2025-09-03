<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// yang atas untuk menyesuaikan URL, lalu yang bawah menyesuaikan nama file yang di folder views. 
Route::get('/about', function () { 
    return view('about', [
        'asal' => 'Kulon Progo, Yogyakarta',
        'nomor' => '+62 822-2354-7785',
        'email' => 'matthewpriantara99@gmail.com'
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});