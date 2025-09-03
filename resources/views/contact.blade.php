@extends('layouts.template')

@section('title', 'Contact')

@section('content')
    <div>
        <h1 class="fw-bold mb-4 text-center">Contact Me</h1>
        <p class="mt-4 text-center">Silakan hubungi saya melalui form di bawah ini:</p>
        <form style="max-width:400px; margin:0 auto;">
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" placeholder="Nama Anda">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email Anda">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Pesan</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Tulis pesan Anda"></textarea>
            </div>
            <div class="d-flex justify-content-center gap-3">
                <button type="submit" class="btn btn-dark fw-bold"
                    style="font-family: montserrat, sans-serif">Kirim</button>
                <button type="button" class="btn btn-dark fw-bold" style="font-family: montserrat, sans-serif"
                    onclick="window.location.href='/'">Kembali ke Home</button>
            </div>
        </form>
    </div>
@endsection
