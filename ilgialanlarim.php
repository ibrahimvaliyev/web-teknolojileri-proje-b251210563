<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ibrahim Valiyev - Proje</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
   <?php include "navbar.php"; ?>
   <main>

<header class="ilgi-header py-5 text-center text-white mb-5 shadow-lg">
  <div class="container py-4">
    <h1 class="display-3 fw-bold">İlgi Alanlarım</h1>
    <p class="lead opacity-75">Filmler, Oyunlar ve Kendi Dünyam</p>
  </div>
</header>

<div class="container">

  <!-- FUTBOL -->
  <div class="card border-success mb-4 shadow">
    <div class="card-header fw-bold fs-4">⚽ Futbol</div>
    <div class="card-body">
      <p class="fw-semibold">
       Futbol benim için sadece bir spor değil; heyecan, rekabet ve 
       stratejinin birleştiği büyük bir tutku. Çocukluğumdan beri maç
        izlemek, taktik analiz etmek ve büyük karşılaşmaların atmosferini 
        hissetmek bana her zaman ayrı bir keyif veriyor. Özellikle derbi
         maçların yarattığı heyecan, son dakika golleri ve beklenmedik geri 
         dönüşler futbolu benim gözümde eşsiz kılıyor. Sadece izlemekle kalmayıp 
         futbol oyunlarıyla da bu tutkuyu dijital dünyaya taşıyorum. Takım kurmak,
          doğru kadroyu seçmek ve sahada en iyi stratejiyi uygulamak, futbolun
           hem eğlenceli hem de düşünmeyi gerektiren yönünü keşfetmemi sağlıyor. 
           Futbol, benim için her zaman birlik, rekabet ve bitmeyen bir heyecan demek
      </p>
    </div>
  </div>

  <!-- FILMLER -->
  <div class="card border-success mb-4 shadow">
    <div class="card-header fw-bold fs-4">🎬 Filmler</div>
    <div class="card-body">
      <p class="fw-semibold">
      Benim için sinema ve dizi dünyası, sınırları olmayan bir keşif 
      alanı. Kendimi tek bir türle sınırlamayı sevmediğim için Harry 
      Potter ve Marvel gibi fantastik evrenlerin büyüleyici görselliğinden,
       Christopher Nolan’ın zamanı ve insan algısını zorlayan akıl dolu 
       başyapıtlarına kadar çok geniş bir yelpazeyi büyük bir merakla takip ediyorum.
      Aynı zamanda sinema tarihine yön vermiş 70’ler ve 80’lerin o kült mafya
     filmleri başta olmak üzere, derin kurgulara sahip klasik yapımları ve 
      sürükleyici dizileri izlemekten büyük keyif alıyorum. Farklı dönemlerin,
      türlerin ve hikaye anlatım tarzlarının derinliklerine inmek benim için gerçek bir tutku.
      </p>
    </div>
  </div>

  <!-- API FILM -->
  <div class="card border-warning mb-5 shadow text-center">
    <div class="card-header fw-bold fs-4">🎬 API ile Gelen Film</div>
    <div class="card-body">

      <div class="row justify-content-center">
        <div class="col-md-5 col-lg-4">
          <div id="film"></div>
        </div>
      </div>

    </div>
  </div>

  <!-- OYUNLAR -->
  <div class="card border-success mb-4 shadow">
    <div class="card-header fw-bold fs-4">🎮 Oyunlar</div>
    <div class="card-body">
      <p class="fw-semibold">
        God of War, Spider-Man, Hogwarts Legacy ve futbol simülasyonları gibi oyunlar
        dijital dünyalarda strateji ve hikaye deneyimi yaşamamı sağlıyor.
      </p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   <script>
fetch("https://www.omdbapi.com/?t=Inception&apikey=8dfc02b0")
.then(res => res.json())
.then(data => {

document.getElementById("film").innerHTML = `
<div class="card shadow">
  <img src="${data.Poster}" class="card-img-top">
  <div class="card-body text-center">
    <h3 class="card-title">${data.Title} (${data.Year})</h3>
    <p class="text-warning">IMDb ⭐ ${data.imdbRating}</p>
    <p class="card-text">${data.Plot}</p>
  </div>
</div>
`;

});
</script>
</body>

</html>