@extends('layouts.app')

@section('content')
<div class="container mt-5 text-center">
    <h2>Plaka Sorgulama Sonucu</h2>
    <div class="card mt-4 mx-auto" style="max-width: 400px;">
        <div class="card-body">
            <p class="fs-5">Plaka Kodu: <strong>{{ $plaka }}</strong></p>
            <p class="fs-5">Şehir: <strong>{{ $sehir }}</strong></p>
            <a href="{{ url('/sehir') }}" class="btn btn-secondary mt-3">Yeni Sorgu</a>
        </div>
    </div>
</div>
@endsection
