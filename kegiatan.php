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
      .activity {
        background: #d4edda;
        border-radius: 8px;
        padding: 30px;
        margin-bottom: 30px;
        color: #155724;
        transition: transform 0.3s, box-shadow 0.3s;
      }
      .activity:hover {
        transform: translateY(-10px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
      }
      .activity img {
        width: 100%;
        border-radius: 8px;
        margin-bottom: 15px;
      }
    </style>
    <title>Yayasan Darul Qur'an</title>
  </head>

  <body style="background-image: url(background.png)">
    <?php include "layout/navbar.html"; ?>
    <!-- content -->
    <div class="container mt-5">
      <h2 class="text-center mb-4">
        Kegiatan Yayasan Pondok Pesantren Darul Quran
      </h2>

      <div class="row" id="activities">
        <!-- Kegiatan 1: Upacara Pembukaan -->
        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="images/1.jpg" alt="Upacara Pembukaan" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Upacara Pembukaan Tahun Ajaran Baru</h3>
          <p>
            Kegiatan ini menandai awal tahun ajaran baru, dihadiri oleh seluruh
            santri dan pengurus untuk memupuk semangat belajar...
          </p>
        </div>

        <!-- Kegiatan 2: Pemilihan Ketua OSIS -->
        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="images/pemilihan_osis.jpg" alt="Pemilihan OSIS" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Pemilihan Ketua OSIS</h3>
          <p>
            Proses demokrasi yang melibatkan santri dalam memilih pemimpin
            organisasi siswa untuk periode selanjutnya...
          </p>
        </div>

        <!-- Kegiatan 3: Shalat Dhuha -->
        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="images/shalat_dhuha.jpg" alt="Shalat Dhuha" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Shalat Dhuha</h3>
          <p>
            Kegiatan shalat sunah yang dilaksanakan setiap pagi untuk memohon
            berkah dan kelancaran belajar...
          </p>
        </div>

        <!-- Kegiatan 4: Kepramukaan -->
        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="images/kepramukaan.jpg" alt="Kepramukaan" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Kepramukaan</h3>
          <p>
            Pembinaan karakter dan keterampilan bagi santri melalui kegiatan
            pramuka yang menyenangkan dan edukatif...
          </p>
        </div>

        <!-- Kegiatan 5: Perkemahan Pramuka -->
        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="images/perkemahan_pramuka.jpg" alt="Perkemahan Pramuka" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Perkemahan Pramuka</h3>
          <p>
            Kegiatan outdoor yang mengajarkan kemandirian dan kerjasama antar
            santri dalam suasana alam...
          </p>
        </div>

        <!-- Kegiatan 6: Rekreasi -->
        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="images/rekreasi.jpg" alt="Rekreasi" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Rekreasi</h3>
          <p>
            Kegiatan santai yang dilakukan untuk refreshing santri agar tetap
            semangat dalam belajar...
          </p>
        </div>

        <!-- Kegiatan 7: Buka Puasa Bersama -->
        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="images/buka_puasa.jpg" alt="Buka Puasa" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Buka Puasa Bersama</h3>
          <p>
            Momen berbagi kebahagiaan dan kehangatan dalam kebersamaan saat
            bulan Ramadan...
          </p>
        </div>

        <!-- Kegiatan 8: Muhadoroh (Pidato) -->
        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="images/muhadoroh.jpg" alt="Muhadoroh" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Muhadoroh (Pidato)</h3>
          <p>
            Kegiatan berpidato untuk melatih keberanian dan kemampuan berbicara
            di depan umum...
          </p>
        </div>

        <!-- Kegiatan 9: Ekstrakulikuler -->
        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="images/ekstrakulikuler.jpg" alt="Ekstrakulikuler" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Ekstrakulikuler</h3>
          <p>
            Berbagai kegiatan di luar jam pelajaran yang mendukung pengembangan
            minat dan bakat santri...
          </p>
        </div>

        <!-- Kegiatan 10: Haflah Akhir Sanah -->
        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="images/haflah_akhir_sanah.jpg" alt="Haflah Akhir Sanah" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Haflah Akhir Sanah</h3>
          <p>
            Perayaan kelulusan dan pencapaian santri di akhir tahun ajaran...
          </p>
        </div>

        <!-- Kegiatan Tambahan -->
        <h2 class="text-center mt-5">Kegiatan Tambahan bagi yang Mondok</h2>

        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="images/pelantikan_pengurus.jpg" alt="Pelantikan Pengurus" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Pelantikan Pengurus</h3>
          <p>
            Pelantikan pengurus baru yang bertugas untuk memimpin dan
            mengorganisir kegiatan santri...
          </p>
        </div>

        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="images/muhadarah.jpg" alt="Muhadarah" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Muhadarah</h3>
          <p>
            Diskusi dan kajian ilmiah yang diadakan secara rutin untuk
            meningkatkan pengetahuan santri...
          </p>
        </div>

        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="images/pembacaan_yasin.jpg" alt="Pembacaan Yasin" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Pembacaan Yasin Malam Jumat</h3>
          <p>
            Kegiatan rutin pembacaan surat Yasin setiap malam Jumat untuk
            memperkuat keimanan...
          </p>
        </div>

        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="images/nadhoman.jpg" alt="Nadhoman" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Nadhoman</h3>
          <p>
            Kegiatan rutin membaca kitab kuning dan diskusi di antara santri
            untuk meningkatkan pemahaman...
          </p>
        </div>

        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="images/madrasah_diniyyah.jpg" alt="Madrasah Diniyyah" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Madrasah Diniyyah</h3>
          <p>
            Pelajaran sore untuk memperdalam ilmu agama dan Al-Qur'an bagi
            santri...
          </p>
        </div>

        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="images/tahsin_bacaan.jpg" alt="Tahsin Bacaan" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Tahsin Bacaan dengan Metode 'Yanbua'</h3>
          <p>
            Pelatihan bacaan Al-Qur'an dengan metode khusus untuk meningkatkan
            kualitas bacaan santri...
          </p>
        </div>
      </div>
    </div>
    <?php include "layout/footer.html"; ?>
  </body>
</html>
