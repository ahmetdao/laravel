@extends('layouts.app')

@section('content')
<div class="container mt-5 text-center">
    <h2>{{ $islem }} İşlemi</h2>

    @if($sayi1 !== null && $sayi2 !== null)
        <div class="card mt-4 mx-auto" style="max-width: 400px;">
            <div class="card-body">
                <p class="fs-5 mb-1">Sayı 1: <strong>{{ $sayi1 }}</strong></p>
                <p class="fs-5 mb-1">Sayı 2: <strong>{{ $sayi2 }}</strong></p>
                <hr>
                <h3 class="text-success">Sonuç: {{ $sonuc }}</h3>
            </div>
        </div>
    @else
        <div class="alert alert-info mt-4 mx-auto" style="max-width: 400px;">
            <p>Lütfen URL'de iki sayı belirtin.</p>
            <p class="mb-0"><code>örnek: /islemler/{{ strtolower($islem) }}/8/3</code></p>
        </div>
    @endif

    <a href="{{ url('/islemler') }}" class="btn btn-secondary mt-4">← Geri Dön</a>
</div>
@endsection
