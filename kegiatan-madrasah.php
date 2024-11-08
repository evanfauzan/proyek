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
        height: 300px; /* Tambahkan untuk membuat ukuran gambar stabil dan sama besar */
        object-fit: cover; /* Tambahkan untuk membuat gambar menyesuaikan dengan ukuran yang ditentukan */
      }
    </style>
    <title>Yayasan Darul Qur'an</title>
  </head>

  <body style="background-image: url(background1.png)">
    <?php include "layout/navbar.html"; ?>
    <!-- content -->
    <div class="container mt-5 ">
      <h2 class="text-center mb-4 bg-light bg-gradient p-5">
        Kegiatan Yayasan Pondok Pesantren Darul Quran
      </h2>

      <div class="row" id="activities">
        <!-- Kegiatan 1: Upacara Pembukaan -->
        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="g-kegiatan/upacara.jpg" alt="Upacara Pembukaan" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Upacara Pembukaan Tahun Ajaran Baru</h3>
          <p>
            Upacara Pembukaan Tahun Ajaran Baru adalah acara yang digelar setiap
            awal tahun ajaran baru sebagai simbol dimulainya kegiatan pendidikan
            di Pondok Pesantren Darul Qur'an. Semua santri, pengurus, dan staf
            pengajar hadir untuk menyambut semangat baru dalam proses pembelajaran.
            Selain itu, upacara ini juga berfungsi untuk mempererat tali persaudaraan
            antara sesama santri serta memperkenalkan program-program penting yang akan
            dijalankan selama tahun ajaran tersebut. Momen ini menjadi kesempatan untuk
            menumbuhkan semangat, kedisiplinan, serta rasa tanggung jawab dalam diri setiap
            individu di pondok pesantren.
          </p>
        </div>

        <!-- Kegiatan 2: Pemilihan Ketua OSIS -->
        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="g-kegiatan/osim.jpg" alt="Pemilihan OSIS" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Pemilihan Ketua OSIM (Organisasi Siswa Intra Madrasah)</h3>
          <p>
            Pemilihan Ketua OSIM adalah ajang demokrasi yang melibatkan seluruh
            santri dalam memilih pemimpin yang akan mewakili mereka dalam
            pengorganisasian berbagai kegiatan di pondok pesantren. Selain
            sebagai ajang pemilihan pemimpin, kegiatan ini bertujuan untuk
            mengajarkan nilai-nilai demokrasi, kepemimpinan, dan tanggung jawab.
            Santri yang terlibat dalam pemilihan juga diberikan kesempatan untuk
            memahami bagaimana cara membuat keputusan secara bijak dan adil. Melalui
            kegiatan ini, diharapkan dapat tercipta pemimpin-pemimpin masa depan
            yang memiliki integritas dan kemampuan dalam memimpin komunitas.
          </p>
        </div>

        <!-- Kegiatan 3: Shalat Dhuha -->
        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="g-kegiatan/duha.jpg" alt="Shalat Dhuha" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Shalat Dhuha</h3>
          <p>
            Shalat Dhuha adalah shalat sunah yang dilakukan pada pagi hari
            setelah matahari terbit dan sebelum waktu shalat Dzuhur. Kegiatan
            ini menjadi rutinitas yang sangat penting di Pondok Pesantren Darul
            Qur'an, karena selain sebagai bentuk ibadah, shalat Dhuha juga
            mengajarkan santri tentang kedisiplinan waktu dan pentingnya memulai
            hari dengan kegiatan positif. Selain itu, shalat Dhuha dipercaya dapat
            membawa berkah dan kelancaran dalam segala urusan, termasuk dalam proses
            belajar. Ini adalah salah satu cara untuk menjaga hubungan dengan Allah
            serta mendapatkan keberkahan dan kemudahan dalam segala aktivitas.
          </p>
        </div>

        <!-- Kegiatan 4: Kepramukaan -->
        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="g-kegiatan/pramuka.jpg" alt="Kepramukaan" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Kepramukaan</h3>
          <p>
            Kepramukaan di Pondok Pesantren Darul Qur'an adalah kegiatan pembinaan
            karakter yang bertujuan untuk melatih santri dalam hal kedisiplinan,
            kemandirian, dan kerjasama. Melalui pramuka, santri diajarkan untuk
            memiliki sikap tanggap terhadap situasi, serta kepedulian terhadap
            lingkungan dan sesama. Kepramukaan juga mengajarkan nilai-nilai seperti
            kebersamaan, semangat gotong-royong, dan rasa tanggung jawab terhadap
            masyarakat. Kegiatan ini menjadi bagian penting dalam membentuk pribadi
            santri yang tidak hanya cerdas secara intelektual tetapi juga matang
            dalam sikap dan karakter.
          </p>
        </div>

        <!-- Kegiatan 5: Perkemahan Pramuka -->
        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="g-kegiatan/kemah.jpg" alt="Perkemahan Pramuka" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Perkemahan Pramuka</h3>
          <p>
            Perkemahan Pramuka adalah kegiatan luar ruangan yang bertujuan untuk
            mengembangkan keterampilan bertahan hidup, kepemimpinan, dan kerjasama
            antar santri. Dalam perkemahan ini, santri diajarkan berbagai teknik
            praktis, seperti mendirikan tenda, memasak dengan cara sederhana,
            serta berkomunikasi dalam tim. Kegiatan ini juga memberikan kesempatan
            bagi santri untuk mengasah kreativitas dan memanfaatkan alam sebagai
            sarana pembelajaran. Melalui perkemahan, para santri dilatih untuk
            menjadi pribadi yang lebih mandiri, disiplin, serta memiliki rasa
            tanggung jawab terhadap diri sendiri dan sesama.
          </p>
        </div>

        <!-- Kegiatan 6: Rekreasi -->
        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="g-kegiatan/studi-bandings.jpg" alt="Rekreasi" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Studi Banding</h3>
          <p>
            Studi banding adalah kegiatan yang dilakukan untuk meningkatkan kualitas
            pendidikan dan pengajaran di Pondok Pesantren Darul Qur'an dengan
            membandingkan praktik terbaik dari lembaga pendidikan lain. Dalam kegiatan
            ini, santri dan pengurus diberi kesempatan untuk mengunjungi lembaga lain
            dan mempelajari sistem pendidikan serta metode pengajaran yang diterapkan.
            Kegiatan ini sangat bermanfaat untuk memperluas wawasan, meningkatkan
            kualitas kurikulum, dan menginspirasi santri serta pengurus untuk terus
            belajar dan berkembang.
          </p>
        </div>

        <!-- Kegiatan 7: Buka Puasa Bersama -->
        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="g-kegiatan/bukapuasa.jpg" alt="Buka Puasa" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Buka Puasa Bersama</h3>
          <p>
            Buka Puasa Bersama adalah kegiatan yang dilaksanakan pada bulan Ramadan
            sebagai bentuk kebersamaan dan rasa syukur. Selain menjadi momen untuk
            berbagi kebahagiaan dalam komunitas, buka puasa bersama juga mengajarkan
            santri tentang pentingnya berbagi dan merasakan empati terhadap sesama.
            Kegiatan ini memberikan kesempatan kepada santri dan pengurus untuk
            saling mengenal lebih dekat dan mempererat ukhuwah Islamiyah antar
            sesama penghuni pondok pesantren.
          </p>
        </div>

        <!-- Kegiatan 8: Muhadoroh (Pidato) -->
        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="g-kegiatan/muhadoroh1.jpg" alt="Muhadoroh" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Muhadoroh (Pidato)</h3>
          <p>
            Muhadoroh adalah kegiatan berpidato yang bertujuan untuk melatih
            keberanian dan kemampuan berbicara di depan umum. Kegiatan ini sangat
            penting karena selain mengasah kemampuan berbicara, kegiatan ini juga
            mengajarkan santri untuk berpikir kritis, menyusun argumen yang jelas,
            serta mengungkapkan pendapat secara sistematis dan persuasif. Melalui
            kegiatan muhadoroh, santri diajak untuk lebih percaya diri, berani
            mengungkapkan ide, serta memperkaya wawasan mereka dalam berbagai bidang.
          </p>
        </div>

        <!-- Kegiatan 9: Ekstrakulikuler -->
        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="g-kegiatan/eskul.jpg" alt="Ekstrakulikuler" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Ekstrakulikuler</h3>
          <p>
            Ekstrakulikuler adalah kegiatan di luar jam pelajaran yang bertujuan
            untuk mengembangkan minat dan bakat santri di berbagai bidang, seperti
            olahraga, seni, dan teknologi. Beberapa kegiatan yang disediakan antara
            lain silat PSHT, futsal, voli, menjahit, dan komputer. Ekstrakulikuler
            memberikan kesempatan kepada santri untuk menemukan dan mengembangkan
            potensi diri mereka. Kegiatan ini juga penting untuk melatih kedisiplinan,
            kerja sama tim, dan mengajarkan pentingnya keseimbangan antara akademik dan
            kegiatan non-akademik.
          </p>
        </div>

        <!-- Kegiatan 10: Haflah Akhir Sanah -->
        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="g-kegiatan/haflah.jpg" alt="Haflah Akhir Sanah" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Haflah Akhir Sanah</h3>
          <p>
            Haflah Akhir Sanah adalah acara perayaan kelulusan dan pencapaian
            santri di akhir tahun ajaran. Pada acara ini, santri yang berhasil
            menyelesaikan program tahfidz atau belajar di pondok pesantren akan
            diberikan penghargaan dan sertifikat. Kegiatan ini tidak hanya
            menjadi momen untuk merayakan keberhasilan, tetapi juga untuk
            merenungkan perjalanan yang telah dilalui sepanjang tahun ajaran.
            Haflah Akhir Sanah juga memberikan dorongan moral kepada santri untuk
            terus berusaha mencapai kesuksesan di masa depan.
          </p>
        </div>

        <!-- Kegiatan Tambahan -->
        <h2 class="text-center mt-5 bg-light bg-gradient p-5">Kegiatan Tambahan Pondok Darul Qur'an</h2>

        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="g-kegiatan/pelantikan.jpg" alt="Pelantikan Pengurus" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Pelantikan Pengurus</h3>
          <p>
            Pelantikan Pengurus adalah acara resmi yang menandai pengangkatan
            pengurus baru yang akan memimpin dan mengorganisir kegiatan-kegiatan
            santri di pondok pesantren. Pelantikan ini penting untuk memastikan
            adanya struktur kepemimpinan yang jelas dan sistem pengorganisasian
            yang efektif di dalam pondok pesantren. Pengurus yang dilantik
            diharapkan dapat menjalankan tugasnya dengan penuh tanggung jawab
            dan mampu memimpin santri lainnya dengan bijaksana dan adil.
          </p>
        </div>

        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="g-kegiatan/muhadoroh.jpg" alt="Muhadarah" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Muhadarah</h3>
          <p>
            Muhadarah adalah kegiatan diskusi dan kajian ilmiah yang diadakan
            secara rutin di Pondok Pesantren Darul Qur'an. Kegiatan ini bertujuan
            untuk memperdalam pengetahuan agama, memperkuat daya pikir, serta
            meningkatkan kemampuan berargumen santri. Kegiatan ini juga mengajarkan
            nilai-nilai kritis dan kolaborasi dalam berpikir serta memperluas wawasan
            intelektual santri mengenai berbagai isu penting dalam kehidupan.
          </p>
        </div>

        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="g-kegiatan/yasin.jpg" alt="Pembacaan Yasin" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Pembacaan Yasin Malam Jumat</h3>
          <p>
            Pembacaan Surat Yasin setiap malam Jumat adalah kegiatan rutin yang
            dilakukan untuk memperkuat keimanan dan ketakwaan santri. Kegiatan ini
            juga memiliki makna spiritual yang dalam, yang bertujuan untuk
            mendekatkan diri kepada Allah dan memohon berkah serta perlindungan-Nya
            bagi seluruh penghuni pondok pesantren. Selain itu, kegiatan ini juga
            menjadi ajang untuk membangun kebersamaan dan keakraban antar santri.
          </p>
        </div>

        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="g-kegiatan/nadoman.jpg" alt="Nadhoman" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Nadhoman</h3>
          <p>
            Nadhoman adalah kegiatan rutin yang melibatkan santri dalam membaca
            kitab kuning dan diskusi ilmiah. Tujuan dari kegiatan ini adalah untuk
            meningkatkan pemahaman tentang ilmu agama dan memperdalam pengetahuan
            tentang berbagai kitab kuning yang menjadi rujukan utama dalam kajian
            agama Islam. Santri dilatih untuk berpikir secara kritis, menilai dan
            menginterpretasikan isi kitab kuning secara benar, serta mengaplikasikan
            nilai-nilai yang terkandung di dalamnya dalam kehidupan sehari-hari.
          </p>
        </div>

        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="g-kegiatan/madin.jpg" alt="Madrasah Diniyyah" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Madrasah Diniyyah</h3>
          <p>
            Madrasah Diniyyah adalah pelajaran tambahan yang diadakan pada sore
            hari di Pondok Pesantren Darul Qur'an. Kegiatan ini fokus pada pengembangan
            ilmu agama, Al-Qur'an, serta pemahaman tentang hadist. Melalui Madrasah
            Diniyyah, santri diberikan kesempatan untuk memperdalam ajaran Islam
            dalam perspektif yang lebih luas, serta mengasah kemampuan dalam mempelajari
            kitab-kitab klasik Islam. Kegiatan ini menjadi pondasi yang kokoh bagi
            santri dalam menjalani kehidupan yang berlandaskan pada prinsip-prinsip agama
            yang kuat.
          </p>
        </div>

        <div class="col-md-6 activity" data-aos="fade-up">
          <img src="g-kegiatan/yanbua1.jpg" alt="Tahsin Bacaan" />
        </div>
        <div class="col-md-6 activity" data-aos="fade-up">
          <h3>Tahsin Bacaan dengan Metode 'Yanbua'</h3>
          <p>
            Tahsin Bacaan adalah kegiatan pelatihan yang dilakukan untuk meningkatkan
            kualitas bacaan Al-Qur'an. Metode 'Yanbua' yang digunakan dalam kegiatan ini
            bertujuan untuk mengoreksi dan memperbaiki tajwid bacaan Al-Qur'an sehingga
            santri dapat membaca dengan lebih baik dan sesuai dengan kaidah-kaidah tajwid
            yang benar. Melalui kegiatan ini, santri juga dilatih untuk memperhatikan
            aspek pelafalan dan suara dalam membaca Al-Qur'an dengan penuh keseriusan.
          </p>
        </div>
      </div>
    </div>
    <?php include "layout/footer.html"; ?>
  </body>
</html>
