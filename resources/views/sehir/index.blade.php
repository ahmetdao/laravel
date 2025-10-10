@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Plaka Sorgulama</h2>
    <p>Bir şehir plakası girerek sorgulayın (örnek: 6)</p>

    <form action="{{ url('/sehir') }}" method="get" onsubmit="window.location='/sehir/'+document.getElementById('plaka').value; return false;">
        <div class="input-group mb-3 mt-3">
            <input type="number" id="plaka" name="plaka" class="form-control" placeholder="Plaka kodu (1-81 arası)">
            <button class="btn btn-primary" type="submit">Sorgula</button>
        </div>
    </form>
</div>
@endsection
