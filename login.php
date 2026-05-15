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

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg border-0 login-card p-4">
            <div class="card-body">
                <div class="text-center mb-4">
                    <h2 class="fw-bold text-dark">Hoş Geldiniz</h2>
                    <p class="text-muted">Lütfen hesabınıza giriş yapın.</p>
                </div>

                <form action="login-denetim.php" method="POST">
                    <div class="mb-3">
                        <label for="username"  class="form-label fw-semibold">Kullanıcı Adı veya Email</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="b251210563@sakarya.edu.tr" required>
                    </div>

            
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <label for="password" name="password" class="form-label fw-semibold">Şifre</label>
                            <a href="#" class="text-decoration-none small text-success">Şifremi Unuttum</a>
                        </div>
                        <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Beni Hatırla</label>
                    </div>

                    <button type="submit" class="btn btn-dark w-100 fw-bold py-2 shadow-sm">Giriş Yap</button>
                </form>

                <div class="text-center mt-4">
                    <p class="text-muted small">Hesabınız yok mu? <a href="kayitol.php" class="text-success text-decoration-none fw-bold">Kayıt Ol</a></p>
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