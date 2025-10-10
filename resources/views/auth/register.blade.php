<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üye Ol - Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card shadow-lg p-4" style="width: 400px; border-radius: 15px;">
        <h3 class="text-center mb-3">Üye Ol</h3>
        <p class="text-center text-muted">Yeni bir hesap oluşturun</p>

        <form method="POST" action="{{ route('register.post') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Ad Soyad</label>
                <input type="text" name="name" class="form-control" placeholder="Adınız Soyadınız" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-Posta</label>
                <input type="email" name="email" class="form-control" placeholder="ornek@mail.com" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Şifre</label>
                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Şifre (Tekrar)</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="••••••••" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Üye Ol</button>

            <div class="text-center mt-3">
                <a href="{{ route('login') }}" class="text-decoration-none">Zaten hesabın var mı? Giriş yap</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
