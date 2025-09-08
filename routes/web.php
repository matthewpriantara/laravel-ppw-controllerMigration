<?php

use App\Http\Controllers\BuatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/data', [BuatController::class, 'index']);