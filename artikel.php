<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="shortcut icon" href="logo.png" type="image/x-icon" />
    <style>
      .selector-for-some-widget {
        box-sizing: content-box;
      }
      .hover-effect:hover {
        transform: scale(1.02);
      }
      .card {
        height: 100%; /* Make cards equal height */
      }
      .card img {
        height: 100%; /* Set a fixed height for images */
        object-fit: cover; /* Maintain aspect ratio */
      }
    </style>
    <title>Yayasan Darul Qur'an</title>
  </head>

  <body style="background-image: url(background.png)">
    <?php include "layout/navbar.html"; ?>
    <div class="container mt-5">
      <!-- Bagian Judul Artikel, silakan edit judul artikel di sini -->
      <h1 class="text-center">Kumpulan Artikel</h1>
      <!-- Tidak ada perubahan pada judul, pastikan untuk tidak mengubah nama class -->
      <!-- Bagian Artikel, silakan tambahkan atau edit artikel di sini -->
      <div class="row">
        <!-- Bagian Artikel 1, silakan edit atau tambahkan artikel di sini -->
        <div class="col-md-4 mb-4" data-aos="fade-up">
          <div class="card hover-effect shadow">
            <!-- Bagian Gambar Artikel, silakan ganti gambar artikel di sini -->
            <img
              src="images/10.jpg"
              alt="Thumbnail Artikel 1"
              class="card-img-top"
            />
            <div class="card-body">
              <!-- Bagian Judul Artikel, silakan edit judul artikel di sini -->
              <h5 class="card-title">Judul Artikel 1</h5>
              <!-- Bagian Deskripsi Artikel, silakan edit deskripsi artikel di sini -->
              <p class="card-text">Deskripsi singkat artikel 1...</p>
              <!-- Bagian Link Artikel, silakan edit link artikel di sini -->
              <a href="Artikel-Kosong.html" class="btn btn-primary"
                >Baca Selengkapnya</a
              >
            </div>
          </div>
        </div>
        <!-- Bagian Artikel 2, silakan edit atau tambahkan artikel di sini -->
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card hover-effect shadow">
            <!-- Bagian Gambar Artikel, silakan ganti gambar artikel di sini -->
            <img
              src="images/15.jpg"
              alt="Thumbnail Artikel 2"
              class="card-img-top"
            />
            <div class="card-body">
              <!-- Bagian Judul Artikel, silakan edit judul artikel di sini -->
              <h5 class="card-title">Judul Artikel 2</h5>
              <!-- Bagian Deskripsi Artikel, silakan edit deskripsi artikel di sini -->
              <p class="card-text">Deskripsi singkat artikel 2...</p>
              <!-- Bagian Link Artikel, silakan edit link artikel di sini -->
              <a href="artikel2.html" class="btn btn-primary"
                >Baca Selengkapnya</a
              >
            </div>
          </div>
        </div>
        <!-- Bagian Artikel 3, silakan edit atau tambahkan artikel di sini -->
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card hover-effect shadow">
            <!-- Bagian Gambar Artikel, silakan ganti gambar artikel di sini -->
            <img
              src="images/56.jpg"
              alt="Thumbnail Artikel 3"
              class="card-img-top"
            />
            <div class="card-body">
              <!-- Bagian Judul Artikel, silakan edit judul artikel di sini -->
              <h5 class="card-title">Judul Artikel 3</h5>
              <!-- Bagian Deskripsi Artikel, silakan edit deskripsi artikel di sini -->
              <p class="card-text">Deskripsi singkat artikel 3...</p>
              <!-- Bagian Link Artikel, silakan edit link artikel di sini -->
              <a href="artikel3.html" class="btn btn-primary"
                >Baca Selengkapnya</a
              >
            </div>
          </div>
        </div>
        <!-- Tidak ada perubahan pada struktur artikel, pastikan untuk tidak mengubah nama class -->
      </div>
      <!-- Bagian Artikel, silakan tambahkan artikel baru di sini -->
      <!-- End of Selection? -->
    </div>
    <?php include "layout/footer.html"; ?>
  </body>
</html>
