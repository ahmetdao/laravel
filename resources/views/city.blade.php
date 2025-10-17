<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şehir Bilgisi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #74ABE2, #5563DE);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .city-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            width: 340px;
        }

        .plate {
            background-color: #0d6efd;
            color: white;
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 8px;
            font-size: 1.5rem;
            margin-bottom: 15px;
            letter-spacing: 1px;
        }

        .city-name {
            font-size: 1.6rem;
            font-weight: 600;
            color: #333;
        }

        .invalid {
            color: #fff;
            font-weight: 500;
        }
    </style>
</head>
<body>

@php
    $sehirler = [
        1 => 'Adana', 2 => 'Adıyaman', 3 => 'Afyonkarahisar', 4 => 'Ağrı', 5 => 'Amasya',
        6 => 'Ankara', 7 => 'Antalya', 8 => 'Artvin', 9 => 'Aydın', 10 => 'Balıkesir',
        11 => 'Bilecik', 12 => 'Bingöl', 13 => 'Bitlis', 14 => 'Bolu', 15 => 'Burdur',
        16 => 'Bursa', 17 => 'Çanakkale', 18 => 'Çankırı', 19 => 'Çorum', 20 => 'Denizli',
        21 => 'Diyarbakır', 22 => 'Edirne', 23 => 'Elazığ', 24 => 'Erzincan', 25 => 'Erzurum',
        26 => 'Eskişehir', 27 => 'Gaziantep', 28 => 'Giresun', 29 => 'Gümüşhane', 30 => 'Hakkari',
        31 => 'Hatay', 32 => 'Isparta', 33 => 'Mersin', 34 => 'İstanbul', 35 => 'İzmir',
        36 => 'Kars', 37 => 'Kastamonu', 38 => 'Kayseri', 39 => 'Kırklareli', 40 => 'Kırşehir',
        41 => 'Kocaeli', 42 => 'Konya', 43 => 'Kütahya', 44 => 'Malatya', 45 => 'Manisa',
        46 => 'Kahramanmaraş', 47 => 'Mardin', 48 => 'Muğla', 49 => 'Muş', 50 => 'Nevşehir',
        51 => 'Niğde', 52 => 'Ordu', 53 => 'Rize', 54 => 'Sakarya', 55 => 'Samsun',
        56 => 'Siirt', 57 => 'Sinop', 58 => 'Sivas', 59 => 'Tekirdağ', 60 => 'Tokat',
        61 => 'Trabzon', 62 => 'Tunceli', 63 => 'Şanlıurfa', 64 => 'Uşak', 65 => 'Van',
        66 => 'Yozgat', 67 => 'Zonguldak', 68 => 'Aksaray', 69 => 'Bayburt', 70 => 'Karaman',
        71 => 'Kırıkkale', 72 => 'Batman', 73 => 'Şırnak', 74 => 'Bartın', 75 => 'Ardahan',
        76 => 'Iğdır', 77 => 'Yalova', 78 => 'Karabük', 79 => 'Kilis', 80 => 'Osmaniye', 81 => 'Düzce'
    ];
@endphp

@if(isset($sehirler[$id]))
    <div class="city-card">
        <div class="plate">{{ str_pad($id, 2, '0', STR_PAD_LEFT) }}</div>
        <div class="city-name">{{ $sehirler[$id] }}</div>
    </div>
@else
    <div class="invalid">
        <h2>Geçersiz şehir ID’si girdiniz</h2>
    </div>
@endif

</body>
</html>
