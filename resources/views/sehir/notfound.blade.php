@extends('layouts.app')

@section('content')
<div class="container mt-5 text-center">
    <h2>Plaka Sorgulama</h2>
    <div class="alert alert-danger mt-4">
        <strong>{{ $plaka }}</strong> kodlu bir plaka bulunamadı.
    </div>
    <a href="{{ url('/sehir') }}" class="btn btn-primary mt-3">Tekrar Dene</a>
</div>
@endsection
