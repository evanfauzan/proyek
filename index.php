<!DOCTYPE html>
<html lang="in">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Evan Fauzan Samiswara" />
    <meta
        name="keywords"
        content="Yayasan Darul Quran, Pondok Pesantren, Pendidikan Islam, Sumatera Selatan, Pesantren Darul Quran, Pendidikan Agama, Sekolah Islam, Madrasah, Yayasan Pendidikan, Pendidikan Berkualitas, Pendidikan Islami, Pondok Pesantren Darul Quran, Yayasan Darul Quran Sumatera Selatan"
    />
    <meta
        name="description"
        content="Website resmi Yayasan Darul Quran, sebuah yayasan yang berfokus pada pendidikan Islam dan pengembangan masyarakat di Sumatera Selatan. Menyediakan informasi tentang pondok pesantren, pendidikan agama, dan kegiatan yayasan."
    />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link rel="shortcut icon" href="logo.png" type="image/x-icon" />

    <style>
        .selector-for-some-widget {
            box-sizing: content-box;
        }
        .hero-section {
            background: rgba(255, 255, 255, 0.8);
            padding: 50px 0;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .hover-effect {
            transition: transform 0.3s;
        }
        .hover-effect:hover {
            transform: scale(1.01);
        }
        .card {
            height: 100%; /* Make cards equal height */
        }
        .card img {
            height: 200px; /* Set a fixed height for images */
            object-fit: cover; /* Maintain aspect ratio */
        }
        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Space out the content */
        }
    </style>

    <title>Yayasan Darul Qur'an</title>
</head>

<body style="background-image: url(background1.png)">
    <?php include "layout/navbar.html"; ?>  
        <!-- Photo Slide -->
    <div
      id="carouselExampleCaptions"
      class="carousel slide"
      data-bs-interval="3000"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="3"
          aria-label="Slide 4"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="4"
          aria-label="Slide 5"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="slide/bgpondok1.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>Slide Pertama</h5>
            <p>Deskripsi untuk slide pertama.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="slide/bgpondok2.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>Slide Kedua</h5>
            <p>Deskripsi untuk slide kedua.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="slide/bgpondok3.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>Slide Ketiga</h5>
            <p>Deskripsi untuk slide ketiga.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="slide/bgpondok4.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>Slide Keempat</h5>
            <p>Deskripsi untuk slide keempat.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="slide/bgpondok5.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>Slide Kelima</h5>
            <p>Deskripsi untuk slide kelima.</p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Sebelumnya</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Selanjutnya</span>
      </button>
    </div>

    <style>
      .carousel-inner img {
        width: 100%;
        height: auto;
        max-height: 500px;
        object-fit: cover;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
        transition: transform 0.5s ease;
      }

      .carousel-item.active img {
        transform: scale(1.05);
      }

      .carousel-caption {
        background: rgba(0, 0, 0, 0.5);
        padding: 10px;
        border-radius: 5px;
        transition: opacity 0.5s ease;
      }
    </style>
    <!-- Logo Section -->
    <div
      class="container d-flex justify-content-center align-items-center py-4"
    >
      <div
        class="d-flex flex-wrap justify-content-center gap-4"
        data-aos="fade-up"
      >
        <img
          src="logo/tk.png"
          class="img-fluid"
          alt="TK"
          style="max-width: 150px; height: auto"
        />
        <img
          src="logo/mi.png"
          class="img-fluid"
          alt="MI"
          style="max-width: 150px; height: auto"
        />
        <img
          src="logo/mts.png"
          class="img-fluid"
          alt="MTS"
          style="max-width: 150px; height: auto"
        />
        <img
          src="logo/ma.png"
          class="img-fluid"
          alt="MA"
          style="max-width: 150px; height: auto"
        />
      </div>
    </div>

    <!-- Hero Section -->
    <div
      class="container hero-section my-5"
      data-aos="fade-up"
      data-aos-delay="100"
    >
      <h1 class="text-center">
        Selamat Datang di Website Yayasan Pondok Pesantren Darul Qur'an
      </h1>
      <p class="text-center">
        Misi kami adalah menyediakan pendidikan yang berkualitas dan mendalam
        mengenai ajaran Al-Qur'an. Kami percaya bahwa pendidikan yang baik dapat
        membentuk karakter dan membawa perubahan positif dalam masyarakat.
      </p>
      <p class="text-center">
        Bergabunglah dengan kami dalam perjalanan spiritual dan pendidikan yang
        penuh berkah. Kami percaya bahwa dengan bekerja sama, kita dapat
        mencapai tujuan yang lebih besar dan membawa manfaat bagi masyarakat.
      </p>
    </div>

    <!-- Berita Section -->
    <div class="container shadow rounded my-5 bg-light bg-gradient p-4">
      <h2 class="text-center mb-4 p-3" data-aos="fade-up">Berita Terbaru</h2>
      <div id="beritaCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-pause="hover" data-bs-interval="2000">
        <div class="carousel-inner">
          <?php
          require "koneksi.php";
          $query = "SELECT * FROM db_berita ORDER BY id DESC;";
          $sql = mysqli_query($konek, $query);

          // Jika query berhasil
          if (mysqli_num_rows($sql) > 0) {
            $first = true; // Flag untuk elemen pertama
            while($result = mysqli_fetch_assoc($sql)) {
          ?>
          <div class="carousel-item <?php echo $first ? 'active' : ''; ?>" data-aos="fade-up">
            <div class="card hover-effect" style="height: 100%; display: flex; flex-direction: column;">
              <img src="g-berita/<?php echo $result['foto']; ?>" class="card-img-top" alt="<?php echo $result['judul']; ?>" style="object-fit: cover; height: 200px;" />
              <div class="card-body" style="flex: 1;">
                <h3 class="card-title"><?php echo $result['judul']; ?></h3>
                <p class="text-muted">Tanggal: <?php echo $result['tanggal']; ?></p>
                <p class="card-text" style="flex: 1;"><?php echo nl2br($result['teks']); ?></p>
              </div>
            </div>
          </div>
          <?php
              $first = false;
            }
          } else {
            echo "<p>Data gambar tidak tersedia.</p>";
          }
          ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#beritaCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#beritaCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <style>
      /* Gaya untuk setiap card */
      .carousel-item .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .carousel-item .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
      }

      .carousel-item img {
        object-fit: cover;
        height: 200px; /* Atur sesuai kebutuhan */
      }

      .card-body {
        padding: 15px;
      }

      .card-title {
        font-size: 1.25rem;
        font-weight: bold;
      }

      .card-text {
        font-size: 0.9rem;
      }

      .carousel-control-prev-icon,
      .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5);
      }

    </style>
    <script>
      // Jika ingin menambahkan fungsi khusus, berikut adalah contoh script tambahan
      document.getElementById('beritaCarousel').addEventListener('mouseenter', function() {
        var carousel = new bootstrap.Carousel(document.getElementById('beritaCarousel'));
        carousel.pause();
      });

      document.getElementById('beritaCarousel').addEventListener('mouseleave', function() {
        var carousel = new bootstrap.Carousel(document.getElementById('beritaCarousel'));
        carousel.cycle();
      });

    </script>

    <?php include "layout/footer.html"; ?>
</body>
</html>
