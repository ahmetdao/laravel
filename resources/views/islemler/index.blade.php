@extends('layouts.app')

@section('content')
<div class="container mt-5 text-center">
    <h2>4 İşlem Sayfası</h2>
    <p class="text-muted">Bir işlem seçin:</p>

    <div class="d-flex justify-content-center gap-3 mt-4 flex-wrap">
        <a href="{{ url('/islemler/topla') }}" class="btn btn-success btn-lg">Toplama</a>
        <a href="{{ url('/islemler/cikar') }}" class="btn btn-danger btn-lg">Çıkarma</a>
        <a href="{{ url('/islemler/carp') }}" class="btn btn-warning btn-lg text-white">Çarpma</a>
        <a href="{{ url('/islemler/bol') }}" class="btn btn-primary btn-lg">Bölme</a>
    </div>

    <div class="mt-5">
        <p class="text-muted">Örnek kullanım: <br>
        <code>http://127.0.0.1:8000/islemler/topla/6/4</code></p>
    </div>
</div>
@endsection
