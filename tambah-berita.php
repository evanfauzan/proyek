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
        /* Additional custom styles (optional) */
    </style>
    <title>Yayasan Darul Qur'an</title>
</head>

<body style="background-image: url(background.png)">
    <?php include "layout/navbar2.html"; ?>
    
    <div class="container py-5 bg-light bg-gradient shadow">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-10">
                <h3 class="text-center mb-4">Form Input berita</h3>
                <form method="post" action="proses-berita.php" enctype="multipart/form-data">
                    <!-- Input Foto -->
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto berita</label>
                        <input type="file" class="form-control" id="foto" name="foto" required>
                    </div>

                    <!-- Input Judul -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul" required>
                        <label for="judul">Judul</label>
                    </div>

                    <!-- Input Tanggal -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Pilih Tanggal" required>
                        <label for="tanggal">Tanggal Contoh:1 Januari 2024</label>
                    </div>

                    <!-- Input Teks -->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="teks" name="teks" placeholder="Masukkan Teks" style="height: 150px;" required></textarea>
                        <label for="teks">Teks</label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary w-100" name="submit">Kirim</button>
                </form>
            </div>
        </div>
    </div>


    
    <?php include "layout/footer.html"; ?>
</body>
</html>
