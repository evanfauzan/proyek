<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="shortcut icon" href="logo.png" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <style>
              /* Global Styles */
        body {
            margin: 0;
            overflow-x: hidden; /* Menghindari geser horizontal */
            font-family: 'Arial', sans-serif; /* Font yang lebih baik untuk tampilan */
            background-color: #f8f9fa; /* Latar belakang */
        }

        .custom-section {
            padding: 60px 15px; /* Padding atas dan bawah */
            width: 100vw; /* Pastikan lebar 100% dari viewport */
            box-sizing: border-box; /* Termasuk padding dalam lebar */
            background-color: #ffffff; /* Warna latar belakang untuk section */
        }

        .custom-title {
            text-align: center; /* Rata tengah */
            font-size: 2.5rem; /* Ukuran font untuk judul utama */
            transition: color 0.3s ease; /* Animasi perubahan warna */
        }

        .custom-title:hover {
            color: #007bff; /* Ganti warna saat hover */
        }

        .custom-subtitle {
            text-align: center; /* Rata tengah */
            font-size: 2rem; /* Ukuran font untuk subjudul */
            margin-top: 30px; /* Jarak atas */
        }

        .custom-paragraph {
            text-align: center; /* Rata tengah */
            margin: 20px 0; /* Jarak atas dan bawah */
            font-size: 1.1rem; /* Ukuran font */
        }

        .custom-list {
            list-style-type: none; /* Menghilangkan bullet */
            padding: 0; /* Menghilangkan padding */
        }

        .custom-list-item {
            background-color: #f1f1f1; /* Warna latar belakang item */
            margin: 10px 0; /* Jarak antar item */
            padding: 15px; /* Padding dalam item */
            border-radius: 5px; /* Sudut membulat */
            transition: background-color 0.3s ease; /* Animasi perubahan latar belakang */
        }

        .custom-list-item:hover {
            background-color: #e9ecef; /* Ganti latar belakang saat hover */
        }

        @media (max-width: 700px) {
            .custom-section {
                padding: 30px 10px; /* Kurangi padding pada layar kecil */
            }

            .custom-title {
                font-size: 2rem; /* Ukuran font lebih kecil di layar kecil */
            }

            .custom-subtitle {
                font-size: 1.5rem; /* Ukuran font lebih kecil di layar kecil */
            }

            .custom-list-item {
                font-size: 0.9rem; /* Ukuran font lebih kecil di layar kecil */
            }
        }
    </style>
    <title>Yayasan Darul Qur'an - Visi & Misi</title>
  </head>

  <body style="background-image: url(background.png); overflow-x: hidden">
    <?php include "layout/navbar.html"; ?>
    <div class="custom-section bg-light bg-gradient" data-aos="fade-up" data-aos-duration="1000">
        <h1 class="custom-title">Visi dan Misi Pondok Pesantren Darul Quran</h1>

        <div class="mt-5">
            <h2 class="custom-subtitle">Visi</h2>
            <p class="custom-paragraph">
                Menjadi lembaga pendidikan Islam terkemuka yang mencetak generasi muda
                berakhlak mulia, cerdas, dan berkontribusi positif terhadap masyarakat.
            </p>
        </div>

        <div class="mt-5">
            <h2 class="custom-subtitle">Misi</h2>
            <ul class="custom-list">
                <li class="custom-list-item">
                    <i class="icon fas fa-book"></i> Menyediakan pendidikan berkualitas
                    yang mengintegrasikan ilmu agama dan pengetahuan umum.
                </li>
                <li class="custom-list-item">
                    <i class="icon fas fa-users"></i> Mengembangkan karakter dan akhlak
                    santri melalui pembelajaran yang berbasis nilai-nilai keagamaan.
                </li>
                <li class="custom-list-item">
                    <i class="icon fas fa-hand-holding-heart"></i> Mendorong santri
                    untuk aktif dalam kegiatan sosial dan pengabdian masyarakat.
                </li>
                <li class="custom-list-item">
                    <i class="icon fas fa-chalkboard-teacher"></i> Melaksanakan program
                    pelatihan untuk meningkatkan kompetensi pengajar dan santri.
                </li>
                <li class="custom-list-item">
                    <i class="icon fas fa-building"></i> Berkolaborasi dengan berbagai
                    institusi untuk memperluas akses pendidikan dan meningkatkan
                    kualitas pengajaran.
                </li>
            </ul>
        </div>
    </div>
    <?php include "layout/footer.html"; ?>
  </body>
</html>
