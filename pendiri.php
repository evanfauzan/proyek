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
      .profile-container {
        background-color: #f8f9fa;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        padding: 30px;
        text-align: center;
        margin-top: 30px;
      }
      .profile-image {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        object-fit: cover;
        border: 5px solid #28a745; /* Green border */
      }
      .quote {
        font-style: italic;
        color: #6c757d;
        margin-top: 20px;
      }
      .name {
        font-size: 1.8rem;
        font-weight: bold;
        color: #343a40;
      }
      .title {
        font-size: 1.2rem;
        color: #28a745;
        margin-bottom: 20px;
      }
    </style>
    <title>Yayasan Darul Qur'an</title>
  </head>

  <body style="background-image: url(background.png)">
    <?php include "layout/navbar.html"; ?>
    <!-- content -->
    <div class="container my-5" data-aos="fade-up" data-aos-duration="1000">
      <div class="profile-container">
        <img
          src="abah.png"
          alt="KH. Junaidi Rois"
          class="img-fluid rounded"
          style="max-width: 200px"
        />
        <h2 class="name">KH. Junaidi Rois</h2>
        <p class="title">Pendiri Yayasan Pondok Pesantren Darul Quran</p>
        <p>
          KH. Junaidi Rois adalah sosok yang dihormati dan dicintai oleh banyak
          orang. Beliau memiliki visi yang jelas untuk menyediakan pendidikan
          Islam yang berkualitas dan mendalam, mengedepankan nilai-nilai
          keagamaan yang kuat.
        </p>
        <p>
          Dengan dedikasi dan komitmen yang tinggi, KH. Junaidi Rois berhasil
          membangun Pondok Pesantren Darul Quran sebagai tempat yang tidak hanya
          fokus pada ilmu pengetahuan, tetapi juga pembentukan karakter santri
          yang baik.
        </p>
        <p>
          Selama bertahun-tahun, beliau telah menjadi panutan dan mentor bagi
          banyak generasi muda, mengajarkan pentingnya akhlak dan spiritualitas
          dalam kehidupan sehari-hari.
        </p>
        <p class="quote">
          "Pendidikan adalah kunci untuk membuka pintu masa depan."
        </p>
      </div>
    </div>
    <?php include "layout/footer.html"; ?>
  </body>
</html>
