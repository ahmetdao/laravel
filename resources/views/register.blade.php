<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kayıt Ol</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #c2e9fb 0%, #a1c4fd 100%);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: "Segoe UI", sans-serif;
    }

    .register-box {
      background: #fff;
      padding: 2.5rem 2rem;
      border-radius: 16px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
      width: 100%;
      max-width: 420px;
      text-align: center;
      transition: all 0.3s ease;
    }

    .register-box:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
    }

    .register-box h3 {
      font-weight: 600;
      color: #0d6efd;
      margin-bottom: 1.2rem;
    }

    .form-control {
      border-radius: 10px;
      padding: 0.7rem 1rem;
    }

    .btn-primary {
      border-radius: 10px;
      padding: 0.6rem;
      font-weight: 500;
      background: linear-gradient(135deg, #0d6efd, #4dabf7);
      border: none;
      transition: all 0.2s ease;
    }

    .btn-primary:hover {
      background: linear-gradient(135deg, #0b5ed7, #3b8ef4);
    }

    .small-text {
      margin-top: 1rem;
      color: #666;
      font-size: 0.9rem;
    }

    a {
      text-decoration: none;
    }
  </style>
</head>
<body>

  <div class="register-box">
    <div class="mb-3">
      <i class="bi bi-person-plus-fill text-primary" style="font-size: 3rem;"></i>
    </div>
    <h3>Kayıt Ol</h3>

    <form action="/uye-kaydet" method="POST">  <!--//gönder butonuna tıklandığında formdan gelen veriler olacak bu verileri bu methodla bu sayfaya gönder demek -->
      @csrf <!--dışarıdan gelen sunucu dışı verileri almıyor-->
      <div class="mb-3 text-start">
        <label for="name" class="form-label">Ad Soyad</label>
        <input type="text" class="form-control" id="name" name="isim" placeholder="Adınızı girin">
      </div>

      <div class="mb-3 text-start">
        <label for="email" class="form-label">E-posta</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="ornek@mail.com">
      </div>

      <div class="mb-3 text-start">
        <label for="password" class="form-label">Şifre</label>
        <input type="password" class="form-control" id="password" name="parola" placeholder="">
      </div>

      <div class="mb-3 text-start">
        <label for="confirm" class="form-label">Şifre (Tekrar)</label>
        <input type="password" class="form-control" id="confirm" placeholder="">
      </div>

      <div class="mb-3 form-check text-start">
        <input type="checkbox" class="form-check-input" id="terms">
        <label class="form-check-label small" for="terms">
          <a href="#">Kullanım koşullarını</a> kabul ediyorum
        </label>
      </div>

      <button type="submit" class="btn btn-primary w-100">Kayıt Ol</button>

      <div class="small-text">
        Zaten hesabın var mı? <a href="/giris-yap" class="text-primary">Giriş yap</a>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
