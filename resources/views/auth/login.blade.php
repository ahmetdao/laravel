<!doctype html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Giriş Yap - Laravel</title>

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Küçük özelleştirmeler */
    body {
      background: linear-gradient(180deg, #f8fafc 0%, #eef2f7 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
    }
    .card {
      width: 100%;
      max-width: 480px;
      border: 0;
      border-radius: 12px;
      box-shadow: 0 8px 30px rgba(24, 39, 75, 0.08);
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #6c63ff;
    }
    .brand {
      font-weight: 700;
      color: #6c63ff;
      letter-spacing: .2px;
    }
  </style>
</head>
<body>
  <div class="card p-4">
    <div class="card-body">
      <div class="text-center mb-4">
        <h3 class="brand">MyApp</h3>
        <p class="text-muted mb-0">Hesabına giriş yap ve devam et</p>
      </div>

      <!-- Durum mesajı (ör. logout sonrası) -->
      @if(session('status'))
        <div class="alert alert-success small" role="alert">
          {{ session('status') }}
        </div>
      @endif

      <!-- Genel doğrulama hatası -->
      @if ($errors->has('email'))
        <div class="alert alert-danger small" role="alert">
          {{ $errors->first('email') }}
        </div>
      @endif

      <form method="POST" action="{{ route('login.submit') }}" novalidate>
        @csrf

        <div class="mb-3">
          <label for="email" class="form-label small">E-posta</label>
          <input id="email" type="email" name="email"
                 class="form-control @error('email') is-invalid @enderror"
                 value="{{ old('email') }}" required autofocus
                 placeholder="example@ornek.com">
          @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3 position-relative">
          <label for="password" class="form-label small">Parola</label>
          <div class="input-group">
            <input id="password" type="password" name="password"
                   class="form-control @error('password') is-invalid @enderror"
                   required placeholder="Parolanızı girin" autocomplete="current-password">
            <button type="button" class="btn btn-outline-secondary" id="togglePassword" tabindex="-1" title="Parolayı göster/gizle">
              👁
            </button>
            @error('password')
              <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label small" for="remember">Beni hatırla</label>
          </div>

          <div>
            <a href="{{ url('/password/reset') }}" class="small">Parolamı unuttum?</a>
          </div>
        </div>

        <div class="d-grid mb-3">
          <button type="submit" class="btn btn-primary btn-lg">Giriş Yap</button>
        </div>

        <div class="text-center">
          <small class="text-muted">Hesabın yok mu? <a href="{{ url('/register') }}">Kayıt ol</a></small>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS + küçük script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Parola göster/gizle butonu
    (function () {
      const pwd = document.getElementById('password');
      const btn = document.getElementById('togglePassword');
      if (!pwd || !btn) return;

      btn.addEventListener('click', function () {
        if (pwd.type === 'password') {
          pwd.type = 'text';
          btn.innerText = '🙈';
        } else {
          pwd.type = 'password';
          btn.innerText = '👁';
        }
      });
    })();
  </script>
</body>
</html>
