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
    <main class="py-5 bg-light min-vh-100">
        <div class="container">
            
            <div class="text-center mb-5">
                <h1 class="display-4 fw-bold text-dark">İletişim</h1>
                <p class="lead text-muted">Benimle iletişime geçmek için aşağıdaki formu doldurabilir veya bilgilerimi kullanabilirsiniz.</p>
            </div>

            <div class="row justify-content-center">
                
                <div class="card border-success mb-3 col-md-5 " >
                    <div class="card-header bg-transparent border-success fw-bold ">İletişim Bilgilerim</div>
                        <div class="card-body text-success">
                             <h5 class="konum-baslik">📍 Konum</h5>
                                 <p class="konum-text">Sakarya, Türkiye</p>
                            <h5 class="konum-baslik">📍 Konum</h5>
                                 <p class="konum-text">Baku,Azerbaijan </p>
                           </div>
                        
                        <div class="card-footer bg-transparent border-success mb-5">
                            <h3 class="text-center mb-3 bn-tkb-ed">Beni Takip Edin</h3> 
                            <a href="https://github.com/ibrahimvaliyev" target="_blank" button type="button" class="btn btn-outline-secondary" >Github</a>
                            <a href="https://www.instagram.com/ibravlyv/" target="_blank" button type="button" class="btn btn-outline-secondary">Instagram</a>
                        </div>
                    </div>
                        
                <div class="col-md-5 offset-md-1">
                    <div class="card h-100 border-0 shadow-sm p-4 bg-white">
                        <div class="card-body">
                            <h3 class="fw-bold mb-4">Mesaj Gönderin</h3>
                            
                            <form action="mesajlar.php" method="post">
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3 ">
                                        <label for="name" class="fw-bold">Adınız</label>
                                        <input type="text" name="ad" class="form-control" id="name" placeholder="Örn. İbrahim" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="surname" class="fw-bold">Soyadınız</label>
                                        <input type="text" name="soyad" class="form-control" id="surname" placeholder="Örn. Valiyev" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="fw-semibold">E-posta Adresiniz</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="ornek@mail.com" required>
                                </div>

                                <div class="mb-3">
                                    <label for="subject" class="fw-semibold">Konu</label>
                                    <input type="text" name="konu" class="form-control" id="konu" placeholder="Mesajınızın konusu" required>
                                </div>

                                <div class="mb-4">
                                    <label for="message" class="fw-semibold">Mesajınız</label>
                                    <textarea class="form-control" name="mesaj" id="message" placeholder="Fikirlerinizi buraya yazın..." required></textarea>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-dark btn-lg fs-6 fw-bold py-3">Mesajı Gönder</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

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