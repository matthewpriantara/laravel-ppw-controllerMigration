@extends('layouts.template')

@section('title', 'About')

@section('content')
    <div>
        <h1 class="judulabout">Tentang Saya</h1>
        <p class="perkenalan mt-4">Halo, nama saya Matthew Priantara. Saya seorang pengembang web yang suka belajar hal baru dan
            membangun aplikasi yang bermanfaat.</p>
        <ul class="perkenalan-list">
            <li>Asal: <?= $asal ?></li>
            <li>Nomor Telepon: <?= $nomor ?></li>
            <li>Email: <?= $email ?></li>
        </ul>
        <div class="btnAbout d-flex justify-content-center gap-3">
            <button style="font-family: montserrat, sans-serif" class="btn btn-dark fw-bold" id="contactBtn"
                onclick="window.location.href='/contact'">Hubungi Saya</button>
            <button style="font-family: montserrat, sans-serif" class="btn btn-dark fw-bold" id="backBtn"
                onclick="window.location.href='/'">Kembali ke Home</button>
        </div>
    </div>
@endsection
