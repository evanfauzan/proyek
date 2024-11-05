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
      .card {
        height: 100%; /* Make cards equal height */
      }
      .card:hover {
        transform: scale(1.02);
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
    <title>Yayasan Darul Qur'an - Berita</title>
  </head>

  <body style="background-image: url(background.png)">
    <?php include "layout/navbar.html"; ?>
    <!-- content -->
    <div
      class="container my-5 bg-light bg-gradient shadow"
      data-aos="zoom-out-down"
      data-aos-duration="1500"
      data-aos-easing="ease-in-out"
    >
      <h2
        class="text-center mb-4 pt-3"
        data-aos="fade-up"
        data-aos-duration="1000"
      >
        Berita Terbaru
      </h2>
      <div
        class="row p-2"
        data-aos-duration="2000"
        data-aos="zoom-in"
        data-aos-easing="ease-in-out"
      >
          <?php
          require "koneksi.php";
          $query = "SELECT * FROM db_berita;";
          $sql = mysqli_query($konek, $query);

          // Jika query berhasil
          if (mysqli_num_rows($sql) > 0) {
            while($result = mysqli_fetch_assoc($sql)){
        ?>
          <div class="col-md-4 mb-4">
            <div
              class="card hover-effect fade-in"
              data-aos="flip-left"
              data-aos-duration="1000"
            >
              <img
                src="g-berita/<?php echo $result['foto']; ?>"
                class="card-img-top"
                alt="<?php echo $result['judul']; ?>"
              />
              <div class="card-body">
                <h3 class="card-title">
                  <?php echo $result['judul']; ?>
                </h3>
                <p class="text-muted">Tanggal: <?php echo $result['tanggal']; ?></p>
                <p class="card-text">
                  <?php echo $result['teks']; ?>
                </p>
              </div>
            </div>
          </div>
        <?php
            }
          } else {
            echo "<p>Data gambar tidak tersedia.</p>";
          }
        ?>
      </div>
    </div>

    <br />
    <?php include "layout/footer.html"; ?>
  </body>
</html>
