<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="css/aos.css"
    />

    <link rel="shortcut icon" href="logo.png" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">

    <style>
      .selector-for-some-widget {
        box-sizing: content-box;
      }
      .card-img-top {
        width: 100px; /* Ukuran gambar logo lebih kecil */
        height: auto; /* Menjaga proporsi */
        margin: 0 auto; /* Mengatur gambar agar berada di tengah */
      }
      .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan pada kartu */
      }
      .card:hover {
        transform: scale(1.02);
      }
      .img-responsive {
        max-width: 100%;
        height: auto; /* Menjaga proporsi gambar */
      }
      .card-header {
        background-color: #f8f9fa; /* Warna latar belakang untuk header */
      }
      .btn-link {
        text-decoration: none; /* Menghilangkan garis bawah */
        color: #007bff; /* Warna teks tombol */
      }
      .btn-link:hover {
        color: #0056b3; /* Warna teks tombol saat hover */
      }
      .animated-button {
        transition: transform 0.2s; /* Transisi untuk efek animasi */
      }
      .animated-button:active {
        transform: scale(0.95); /* Efek mengecil saat tombol ditekan */
      }
    </style>
    <title>Yayasan Darul Qur'an - Pendaftaran</title>
  </head>
  <body style="background-image: url(background1.png)">
    <?php include "layout/navbar.html"; ?>
    <br />
    <!-- content -->
    <img src="ppdb.jpg" class="img-fluid" alt="PPDB" />
    <div class="container-fluid bg-light bg-gradient">
      <h1 class="text-center p-3" data-aos="fade-up">
        Tentang Yayasan Pesantren Darul Quran
      </h1>
      <div class="row mt-4">
        <div class="col-md-12">
          <p data-aos="fade-up" data-aos-delay="100">
            Yayasan Pesantren Darul Quran adalah sekolah Islam umum yang
            memberikan fleksibilitas bagi santrinya. Santri memiliki pilihan
            untuk menetap (mondok) di pesantren atau pulang pergi setiap hari.
            Dengan sistem pendidikan yang mendukung, kami memastikan setiap
            santri dapat belajar dengan nyaman sesuai dengan kebutuhan mereka.
          </p>
        </div>
      </div>

      <h2 class="mt-5 text-center" data-aos="fade-up">Program Pendidikan</h2>
      <div class="row mt-4 justify-content-center">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card text-center">
            <img src="logo/tk.png" class="card-img-top" alt="Logo TK" />
            <div class="card-body">
              <h5 class="card-title">TK (Taman Kanak-Kanak)</h5>
              <p class="card-text">
                Program pendidikan dasar untuk anak usia dini, menanamkan
                nilai-nilai Islam sejak usia muda.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="card text-center">
            <img src="logo/mi.png" class="card-img-top" alt="Logo MI" />
            <div class="card-body">
              <h5 class="card-title">MI (Madrasah Ibtidaiyah)</h5>
              <p class="card-text">
                Pendidikan dasar Islam yang mengintegrasikan ilmu umum dan ilmu
                agama.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
          <div class="card text-center">
            <img src="logo/mts.png" class="card-img-top" alt="Logo MTS" />
            <div class="card-body">
              <h5 class="card-title">MTS (Madrasah Tsanawiyah)</h5>
              <p class="card-text">
                Pendidikan menengah pertama yang fokus pada penguatan ilmu agama
                dan pengetahuan umum.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-3" data-aos="fade-up" data-aos-delay="500">
          <div class="card text-center">
            <img src="logo/ma.png" class="card-img-top" alt="Logo MA" />
            <div class="card-body">
              <h5 class="card-title">MA (Madrasah Aliyah)</h5>
              <p class="card-text">
                Pendidikan menengah atas yang mempersiapkan santri untuk
                melanjutkan ke pendidikan tinggi dengan landasan agama yang
                kuat.
              </p>
            </div>
          </div>
        </div>
      </div>
      <br />
    </div>
    <div class="container-fluid bg-primary-subtle bg-gradient p-4">
      <div class="row">
        <!-- Konten Kiri -->
        <div class="col-md-6" data-aos="fade-up">
          <h1>Kenapa Memilih <b>Yayasan Darul Quran?</b></h1>
          <div id="accordion" class="accordion">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Kualitas Pendidikan
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                <div class="accordion-body">
                  Yayasan Darul Quran menawarkan kurikulum yang terpadu antara pendidikan umum dan agama. Kami memiliki pengajar berkualitas yang berkomitmen untuk memberikan pendidikan terbaik, sehingga santri kami siap menghadapi tantangan masa depan.
                  <ul>
                    <li>Pengajaran interaktif dan inovatif.</li>
                    <li>Fokus pada pengembangan karakter.</li>
                    <li>Program ekstra kurikuler yang mendukung pembelajaran.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Lingkungan yang Mendukung
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                <div class="accordion-body">
                  Kami menyediakan lingkungan yang kondusif untuk belajar, didukung oleh fasilitas yang memadai dan tenaga pengajar yang peduli. Dengan suasana yang positif, santri dapat belajar dengan nyaman.
                  <ul>
                    <li>Ruang kelas yang nyaman dan bersih.</li>
                    <li>Perpustakaan dengan koleksi buku yang lengkap.</li>
                    <li>Area bermain dan kegiatan luar ruangan.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Fasilitas Lengkap
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                <div class="accordion-body">
                  Fasilitas yang kami sediakan meliputi ruang kelas yang nyaman, perpustakaan, area kegiatan luar ruangan, dan ruang serbaguna untuk berbagai acara. Kami berusaha untuk menciptakan pengalaman belajar yang menyeluruh.
                  <ul>
                    <li>Laboratorium sains dan komputer.</li>
                    <li>Ruang olahraga dan kegiatan seni.</li>
                    <li>Kantin dengan menu sehat.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Konten Kanan -->
        <div
          class="col-md-6 text-center"
          data-aos="fade-up"
          data-aos-delay="200"
        >
          <img
            src="side1.png"
            class="img-responsive"
            alt="Gambar Yayasan Darul Quran"
            style="max-width: 563px; width: 100%"
          />
        </div>
      </div>
    </div>
    <!-- Langkah Pendaftaran -->
    <div class="container-fluid bg-light bg-gradient py-5">
      <div class="container">
        <h2 class="text-center" data-aos="fade-up">Langkah Pendaftaran</h2>
        <div class="row mt-4" data-aos="fade-up" data-aos-delay="100">
          <div class="col-md-6">
            <div class="list-group">
              <a class="list-group-item list-group-item-action">
                <i class="fas fa-pencil-alt"></i>
                <strong>1. Isi Formulir Pendaftaran</strong>
                <p class="mb-1">
                  Klik tombol di bawah untuk mengakses formulir pendaftaran.
                </p>
              </a>
              <a class="list-group-item list-group-item-action">
                <i class="fas fa-file-alt"></i>
                <strong>2. Siapkan Dokumen yang Diperlukan</strong>
                <p class="mb-1">
                  Dokumen seperti akta kelahiran dan pas foto diperlukan untuk
                  pendaftaran.
                </p>
              </a>
              <a class="list-group-item list-group-item-action">
                <i class="fas fa-check-circle"></i>
                <strong>3. Tunggu Konfirmasi dari Pihak Yayasan</strong>
                <p class="mb-1">
                  Kami akan menghubungi Anda untuk mengonfirmasi pendaftaran.
                </p>
              </a>
              <a class="list-group-item list-group-item-action">
                <i class="fas fa-user-graduate"></i>
                <strong>4. Bergabung dengan Yayasan Darul Quran!</strong>
                <p class="mb-1">
                  Selamat! Anda siap memulai perjalanan pendidikan.
                </p>
              </a>
            </div>
          </div>
          <div
            class="col-md-6 text-center"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <br>
            <p>Anda bisa mendaftar di sini</p>
            <div class="arrow" data-aos="fade-up" data-aos-delay="300"></div>
              <i class="fas fa-arrow-down"></i>
              
            </div>
            <a
              href="https://forms.gle/UefiRJ69poQmJVHs5"
              class="btn btn-primary btn-lg animated-button mt-3"
              target="_blank"
            >
              <i class="fas fa-paper-plane"></i> Daftar Sekarang
            </a>

          </div>
        </div>

        <h5 class="mt-4" data-aos="fade-up" data-aos-delay="300">
          Syarat Pendaftaran:
        </h5>
        <ul data-aos="fade-up" data-aos-delay="400">
          <li>Usia minimal 4 tahun untuk TK.</li>
          <li>Membawa fotokopi akta kelahiran.</li>
          <li>Melampirkan pas foto terbaru.</li>
          <li>Melakukan wawancara dengan pengurus yayasan.</li>
        </ul>
      </div>
    </div>
    <?php include "layout/footer.html"; ?>
  </body>
</html>
