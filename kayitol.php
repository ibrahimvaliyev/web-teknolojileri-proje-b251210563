<!DOCTYPE html>
<html>
<head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ibrahim Valiyev - Ozgecmis</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include "navbar.php"; ?>
    <div class="container d-flex justify-content-center align-items-center vh-100 py-5">
        <div class="card shadow-lg border-0 register-card p-4">
            <div class="card-body">
                <div class="text-center mb-4">
                    <h2 class="fw-bold text-dark">Hesap Oluştur</h2>
                    <p class="text-muted">Aramıza katılmak için formu doldurun.</p>
                </div>

                <form action="register.php" method="POST">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="reg-name"  class="form-label fw-semibold">Adınız</label>
                            <input type="text" name="reg-name" class="form-control" id="reg-name" placeholder="İbrahim" required>
                        </div>
                        <div class="col-md-6 mt-3 mt-md-0">
                            <label for="reg-surname" class="form-label fw-semibold">Soyadınız</label>
                            <input type="text" name="reg-surname" class="form-control" id="reg-surname" placeholder="Valiyev" required>
                        </div>
                    </div>

                    <!-- Kullanıcı Adı -->
                    <div class="mb-3">
                        <label for="reg-username" class="form-label fw-semibold">Kullanıcı Adı</label>
                        <input type="text" name="reg-username" class="form-control" id="reg-username" placeholder="ibravlyv" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="reg-email"  class="form-label fw-semibold">Email Adresiniz</label>
                        <input type="email" name="reg-email" class="form-control" id="reg-email" placeholder="ornek@mail.com" required>
                    </div>

                
                    <div class="mb-3">
                        <label for="reg-password" name="reg-password" class="form-label fw-semibold">Şifre</label>
                        <input type="password" name="reg-password" class="form-control" id="reg-password" placeholder="••••••••" required>
                    </div>

            
                    <div class="mb-4">
                        <label for="reg-password-confirm"   class="form-label fw-semibold">Şifre Tekrar</label>
                        <input type="password" name="reg-password-confirm" class="form-control" id="reg-password-confirm" placeholder="••••••••" required>
                    </div>

                    <div class="mb-4 form-check">
                        <input type="checkbox" class="form-check-input" id="terms" required>
                        <label class="form-check-label small text-muted" for="terms">
                            <a href="#" class="text-success text-decoration-none">Kullanım Şartlarını</a> ve Gizlilik Politikasını kabul ediyorum.
                        </label>
                    </div>
                    <button type="submit" class="btn btn-dark w-100 fw-bold py-2 shadow-sm">Hesabı Oluştur</button>
                </form>

                <div class="text-center mt-4">
                    <p class="text-muted small">Zaten hesabınız var mı? <a href="login.html" class="text-success text-decoration-none fw-bold">Giriş Yap</a></p>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-light py-4 mt-5">
    <div class="container text-center">
        <p class="mb-1">&copy; 2026 İbrahim Valiyev</p>
        
        <p class="small text-secondary">
            Sakarya Üniversitesi - Bilgisayar Mühendisliği
        </p>
    </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>