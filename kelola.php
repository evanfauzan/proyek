<?php
  require 'koneksi.php';

      
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="shortcut icon" href="logo.png" type="image/x-icon" />
    <style>

    </style>
    <title>Yayasan Darul Qur'an - Berita</title>
  </head>

  <body style="background-image: url(background.png)">
    <?php include "layout/navbar2.html"; ?>
        <!-- Navbar Kecil -->
    <h1 class="text-center">Galeri Pondok</h1>
    <div class="container py-5">
      <h1 class="text-center mb-4 text-white">Upload Gambar Pondok Pesantren</h1> 

      <!-- Form Upload Image -->
      <form action="proses.php" method="POST" enctype="multipart/form-data">
        <div class="card shadow-sm p-4">
          <div class="mb-3">
            <label for="foto" class="form-label fs-4">Pilih Gambar</label>
            <input type="file" name="foto" id="foto" class="form-control" required />
          </div>

          <div class="d-grid gap-2">
            <button type="submit" name="submit" class="btn btn-primary btn-lg">Upload</button>
          </div>
        </div>
      </form>

      <!-- Info Alert -->
      <div class="alert alert-info mt-4" role="alert">
        <strong>Petunjuk:</strong> Pastikan ukuran file tidak lebih dari 2MB dan format file adalah JPEG, JPG, atau PNG.
      </div>
    </div>


    <?php include "layout/footer.html"; ?>
  </body>
</html>
