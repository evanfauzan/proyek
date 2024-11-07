<?php
  require 'koneksi.php';
  session_start();

  // Cek apakah pengguna sudah login
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
      // Jika belum login, arahkan ke login.php
      header("Location: login.php");
      exit();
  }
   // Ambil nama pengguna dari session
  $nama_pengguna = $_SESSION['username'];

  // Query untuk mengambil nama dari tabel tb_user berdasarkan username
  $query_nama = "SELECT nama FROM tb_user WHERE username = '$nama_pengguna'";
  $result_nama = mysqli_query($konek, $query_nama);

  // Cek apakah query berhasil dan ada data yang dihasilkan
  if (mysqli_num_rows($result_nama) > 0) {
      $row_nama = mysqli_fetch_assoc($result_nama);
      $nama_pengguna = $row_nama['nama']; // Simpan nama pengguna ke dalam variabel
  }
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
      body {
        background-color: #f8f9fa;
      }

      .container {
        max-width: 1200px;
      }

      .card {
        border-radius: 10px;
      }

      .table img {
        max-width: 150px;
        max-height: 100px;
        object-fit: cover;
      }

      .navbar {
        background-color: #0d6efd;
      }

      .navbar .nav-link {
        color: white !important;
      }

      .navbar .nav-link:hover {
        color: #ffdd57 !important;
      }

      .alert-info {
        font-size: 16px;
        border-radius: 10px;
      }

      .btn-upload {
        border-radius: 50px;
        transition: all 0.3s ease;
      }

      .btn-upload:hover {
        transform: scale(1.05);
        background-color: #0056b3;
      }

      .btn-danger:hover {
        background-color: #dc3545 !important;
        transform: scale(1.05);
      }
    </style>
    <title>Galeri MTS</title>
  </head>

  <body>
    <?php include "layout/navbar2.html"; ?>

    <div class="container my-5">
      <?php include 'layout/halo.html';?>

      <h1 class="text-center text-primary mb-5">Galeri MTS</h1>

      <!-- Form Upload Gambar -->
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card shadow-sm p-4">
            <h3 class="text-center mb-4">Upload Gambar Pondok Pesantren MTS</h3>
            <form action="proses3.php" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="foto" class="form-label fs-4">Pilih Gambar</label>
                <input type="file" name="foto" id="foto" class="form-control" required />
              </div>

              <div class="d-grid gap-2">
                <button type="submit" name="submit" class="btn btn-primary btn-lg btn-upload">Upload</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="alert alert-info mt-4" role="alert">
        <strong>Petunjuk:</strong> Pastikan format file adalah JPEG, JPG, atau PNG.
      </div>

      <!-- Tabel Gambar -->
      <div class="mt-5">
        <h3 class="text-center mb-4">Daftar Gambar yang Diupload</h3>

        <div class="card shadow-sm">
          <div class="card-body">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Kontrol</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  require "koneksi.php";
                  $n = 0;
                  $query = "SELECT * FROM db_gambar_mts;";
                  $sql = mysqli_query($konek, $query);

                  if (mysqli_num_rows($sql) > 0) {
                    while($result = mysqli_fetch_assoc($sql)){
                ?>
                  <tr>
                    <th scope="row"><?php echo ++$n;?></th>
                    <td><img src="MTS/<?php echo $result['foto']; ?>" alt="Gambar" class="img-thumbnail"></td>
                    <td>
                      <a href="proses3.php?hapus=<?php echo $result['id']; ?>" 
                         class="btn btn-danger btn-sm" 
                         onclick="return confirm('Apakah Anda yakin ingin menghapus gambar ini?')">
                         <i class="bi bi-trash"></i> Hapus
                      </a>
                    </td>
                  </tr>
                <?php
                    }
                  } else {
                    echo "<tr><td colspan='3' class='text-center'>Data gambar tidak tersedia.</td></tr>";
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

    <?php include "layout/footer.html"; ?>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
