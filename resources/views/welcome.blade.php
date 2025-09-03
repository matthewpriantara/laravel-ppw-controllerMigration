@extends('layouts.template')

@section('title', 'Home')

@section('content')
    <div class="d-flex justify-content-center flex-column align-items-center flex-column" style="min-height: 70vh">
        <h1 class="fw-bold" style="font-size: 3rem">Selamat datang di web saya</h1>
        <h3 class="mt-3">Ini adalah halaman utama dari website saya.</h3>
        <div class="d-flex gap-3 mt-2">
            <a href="/about" style="font-family: montserrat, sans-serif" class="btn btn-dark fw-bold">Menuju ke halaman about</a>
            <a href="/contact" style="font-family: montserrat, sans-serif" class="btn btn-dark fw-bold">Menuju ke halaman contact</a>
        </div>
    </div>
@endsection
