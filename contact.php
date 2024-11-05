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
      .hero-section {
        background: rgba(255, 255, 255, 0.8);
        padding: 50px 0;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      }
    </style>
    <title>Yayasan Darul Qur'an - kontak</title>
  </head>

  <body style="background-image: url(background.png)">
    <?php include "layout/navbar.html"; ?>
    <div
      class="bg-light bg-gradient rounded align-middle shadow"
      style="max-width: 1000px; margin: auto"
      data-aos="fade-up"
      data-aos-duration="1000"
    >
      <!-- content -->
      <div
        class="container mt-5 p-5"
        data-aos="zoom-in"
        data-aos-duration="1000"
      >
        <div
          class="contact-info mb-4 bg-info bg-gradient p-2 rounded"
          data-aos="fade-right"
          data-aos-duration="1000"
        >
          <h2 class="contact-title">Kontak Kami</h2>
          <p class="contact-phone">
            <strong>No. Kontak:</strong>
            <a href="https://wa.me/+6281325123377" target="_blank"
              >+62 813-2512-3377</a
            >
          </p>
          <p class="contact-address">
            <strong>Alamat:</strong> Yayasan Pesantren Darul Quran, Blok B,
            Sumber Hidup, Kec. Pedamaran Tim., Kabupaten Ogan Komering Ilir,
            Sumatera Selatan 30672
          </p>
        </div>

        <div class="map mb-4" data-aos="fade-left" data-aos-duration="1000">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15928.30793223565!2d105.0748385!3d-3.5697624!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3c017f82ad1343%3A0xe63ada6f35d9e9b4!2sYayasan%20Darul%20Qur'an%20Sumber%20Hidup!5e0!3m2!1sid!2sid!4v1728961261461!5m2!1sid!2sid"
            width="100%"
            height="400"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
          ></iframe>
        </div>

        <form
          class="form-contact mb-5"
          action="https://formsubmit.co/darulquranoki@gmail.com"
          method="POST"
          data-aos="fade-up"
          data-aos-duration="1000"
        >
          <h2 class="form-title text-center mb-4">Kirim Pesan</h2>
          <div class="row mb-3">
            <div
              class="col-md-6"
              data-aos="fade-right"
              data-aos-duration="1000"
            >
              <input
                type="text"
                name="name"
                placeholder="Nama"
                class="form-control"
                required
              />
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
              <input
                type="email"
                name="email"
                placeholder="Email"
                class="form-control"
                required
              />
            </div>
          </div>
          <div class="mb-3" data-aos="fade-up" data-aos-duration="1000">
            <input
              type="tel"
              name="phone"
              placeholder="Nomor Telepon"
              class="form-control"
              required
            />
          </div>
          <div class="mb-3" data-aos="fade-down" data-aos-duration="1000">
            <textarea
              name="message"
              placeholder="Pesan"
              class="form-control"
              rows="5"
              required
            ></textarea>
          </div>

          <button
            type="submit"
            class="btn btn-primary btn-block"
            data-aos="zoom-in"
            data-aos-duration="1000"
          >
            Kirim Pesan
          </button>
        </form>

        <div class="faq" data-aos="fade-up" data-aos-duration="1000">
          <h2 class="faq-title text-center">FAQ</h2>
          <div class="accordion" id="faqAccordion">
            <div
              class="accordion-item"
              data-aos="fade-right"
              data-aos-duration="1000"
            >
              <h2 class="accordion-header" id="headingOne">
                <button
                  class="accordion-button"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseOne"
                  aria-expanded="true"
                  aria-controls="collapseOne"
                >
                  Apa saja program pesantren yang ditawarkan?
                </button>
              </h2>
              <div
                id="collapseOne"
                class="accordion-collapse collapse show"
                aria-labelledby="headingOne"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body">
                  Kami menawarkan berbagai program pesantren, termasuk pengajian
                  Al-Qur'an, Hadits, Fiqih, dan lain-lain.
                </div>
              </div>
            </div>
            <div
              class="accordion-item"
              data-aos="fade-left"
              data-aos-duration="1000"
            >
              <h2 class="accordion-header" id="headingTwo">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo"
                  aria-expanded="false"
                  aria-controls="collapseTwo"
                >
                  Bagaimana cara mendaftar?
                </button>
              </h2>
              <div
                id="collapseTwo"
                class="accordion-collapse collapse"
                aria-labelledby="headingTwo"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body">
                  Anda dapat mendaftar secara online melalui website kami atau
                  langsung datang ke lokasi.
                </div>
              </div>
            </div>
            <div
              class="accordion-item"
              data-aos="fade-right"
              data-aos-duration="1000"
            >
              <h2 class="accordion-header" id="headingThree">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseThree"
                  aria-expanded="false"
                  aria-controls="collapseThree"
                >
                  Apa saja Syarat Pendaftarannya?
                </button>
              </h2>
              <div
                id="collapseThree"
                class="accordion-collapse collapse"
                aria-labelledby="headingThree"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body">
                  - Kartu Keluarga (KK) <br />
                  - Surat Keterangan Lulus (SKL) <br />
                  - Akta Kelahiran<br />
                  - Raport 2 semester terakhir
                </div>
              </div>
            </div>
            <div
              class="accordion-item"
              data-aos="fade-left"
              data-aos-duration="1000"
            >
              <h2 class="accordion-header" id="headingFour">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseFour"
                  aria-expanded="false"
                  aria-controls="collapseFour"
                >
                  Bagaimana Alur Pendaftarannya?
                </button>
              </h2>
              <div
                id="collapseFour"
                class="accordion-collapse collapse"
                aria-labelledby="headingFour"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body">
                  - Datang ke stand PPDB Madrasah Darun Najaa <br />
                  - Mengisi formulir pendaftaran <br />
                  - Menyerahkan syarat pendaftaran - Raport 2 semester terakhir
                  <br />
                </div>
              </div>
            </div>
            <div
              class="accordion-item"
              data-aos="fade-right"
              data-aos-duration="1000"
            >
              <h2 class="accordion-header" id="headingFive">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseFive"
                  aria-expanded="false"
                  aria-controls="collapseFive"
                >
                  Apa saja Sarana & Prasarana Yang didapat?
                </button>
              </h2>
              <div
                id="collapseFive"
                class="accordion-collapse collapse"
                aria-labelledby="headingFive"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body">
                  - Gedung dan ruang belajar yang modern dan representatif
                  <br />
                  - Asrama yang nyaman dan aman untuk santri <br />
                  - Masjid untuk beribadah <br />
                  - Laboratorium komputer yang lengkap dan modern <br />
                  - Guru-guru yang berpengalaman dan berkualitas <br />
                  - Kurikulum yang terstruktur dan sesuai dengan kebutuhan
                  santri
                  <br />
                  - Listrik yang memadai
                </div>
              </div>
            </div>
            <div
              class="accordion-item"
              data-aos="fade-left"
              data-aos-duration="1000"
            >
              <h2 class="accordion-header" id="headingSix">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseSix"
                  aria-expanded="false"
                  aria-controls="collapseSix"
                >
                  Apa saja Program Untuk Santri?
                </button>
              </h2>
              <div
                id="collapseSix"
                class="accordion-collapse collapse"
                aria-labelledby="headingSix"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body">
                  - Khitobah <br />
                  - Tahfiz Qur'an <br />
                  - Maulidur Rosul <br />
                  - Kajian Kitab Kuning <br />
                  - Mengaji Al-Qur'an
                </div>
              </div>
            </div>
            <div
              class="accordion-item"
              data-aos="fade-right"
              data-aos-duration="1000"
            >
              <h2 class="accordion-header" id="headingSeven">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseSeven"
                  aria-expanded="false"
                  aria-controls="collapseSeven"
                >
                  Apa saja Fasilitasnya?
                </button>
              </h2>
              <div
                id="collapseSeven"
                class="accordion-collapse collapse"
                aria-labelledby="headingSeven"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body">
                  - Asrama Pesantren <br />
                  - Gedung milik sendiri <br />
                  - Sarana Belajar yang memadai <br />
                  - Tempat ibadah <br />
                  - Sarana Olahraga <br />
                  - LAB Komputer <br />
                  - Balai Latihan Kerja (BLK) <br />
                  - Kamar Mandi
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br />
    <?php include "layout/footer.html"; ?>
  </body>
</html>
