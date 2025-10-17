<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Giriş Yap</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons (isteğe bağlı) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #e3f2fd, #ffffff);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .login-card {
      width: 100%;
      max-width: 400px;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
      padding: 2rem;
    }

    .login-card h3 {
      font-weight: 600;
      text-align: center;
      margin-bottom: 1rem;
    }

    .form-control:focus {
      box-shadow: none;
      border-color: #0d6efd;
    }

    .btn-primary {
      background-color: #0d6efd;
      border: none;
      transition: 0.2s;
    }

    .btn-primary:hover {
      background-color: #0b5ed7;
    }

    .small-text {
      text-align: center;
      font-size: 0.9rem;
      margin-top: 1rem;
      color: #666;
    }
  </style>
</head>
<body>

  <div class="login-card">
    <div class="text-center mb-3">
      <i class="bi bi-person-circle fs-1 text-primary"></i>
    </div>

    <h3>Giriş Yap</h3>

    <form>
      <div class="mb-3">
        <label for="email" class="form-label">E-posta</label>
        <input type="email" class="form-control" id="email" placeholder="ornek@mail.com">
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Şifre</label>
        <input type="password" class="form-control" id="password" placeholder="">
      </div>

      <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="remember">
          <label class="form-check-label" for="remember">Beni hatırla</label>
        </div>
        <a href="#" class="text-decoration-none small text-primary">Şifremi unuttum?</a>
      </div>

      <button type="submit" class="btn btn-primary w-100">Giriş Yap</button>

      <div class="small-text">
        Hesabın yok mu? <a href="/uye-ol" class="text-decoration-none">Kayıt ol</a>
      </div>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
