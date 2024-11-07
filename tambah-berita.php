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
            background-color: #f8f9fa; /* Ganti background dengan warna netral */
        }
        
        .container {
            max-width: 1200px;
        }
        
        h3 {
            font-weight: 600;
        }

        .form-floating input, .form-floating textarea {
            border-radius: 10px;
        }

        .btn-primary {
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        table th, table td {
            text-align: center;
        }

        table img {
            max-width: 120px;
            max-height: 100px;
            object-fit: cover;
        }

        .alert-info {
            font-size: 16px;
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
    </style>
    <title>Tambah Berita</title>
</head>

<body>
    <?php include "layout/navbar2.html"; ?>

    <div class="container py-5">
        <?php include 'layout/halo.html';?>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-10">
                <h3 class="text-center mb-4">Form Input Berita</h3>
                <form method="post" action="proses-berita.php" enctype="multipart/form-data">
                    <!-- Input Foto -->
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto Berita</label>
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
                        <label for="tanggal">Tanggal (Contoh: 1 Januari 2024)</label>
                    </div>

                    <!-- Input Teks -->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="teks" name="teks" placeholder="Masukkan Teks" style="height: 150px;" required onkeyup="hitungHuruf()"></textarea>
                        <label for="teks">Teks Berita</label>
                        <p id="hitung-huruf">Huruf: 0/500</p>
                    </div>
                    <script>
                        function hitungHuruf() {
                            var teks = document.getElementById('teks').value;

                            // Membatasi input agar tidak melebihi 500 karakter
                            if (teks.length > 500) {
                                teks = teks.substring(0, 500);  // Potong teks jika lebih dari 500 karakter
                                document.getElementById('teks').value = teks; // Set nilai textarea ke teks yang dipotong
                            }

                            // Hitung jumlah karakter
                            var jumlahKarakter = teks.length;

                            // Update elemen 'hitung-huruf' untuk menampilkan jumlah karakter
                            document.getElementById('hitung-huruf').innerHTML = 'Huruf: ' + jumlahKarakter + '/500';
                        }
                    </script>



                    <button type="submit" class="btn btn-primary w-100" name="submit">
                        <i class="bi bi-plus"></i> Tambah Berita
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- Daftar Berita -->
    <div class="container py-5">
        <h3 class="text-center mb-4">Daftar Berita</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Teks</th>
                    <th scope="col">Kontrol</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require "koneksi.php";
                $n = 0;
                // Mengambil data gambar dan informasi lainnya dari database
                $query = "SELECT * FROM db_berita";
                $sql = mysqli_query($konek, $query);

                // Jika query berhasil
                if (mysqli_num_rows($sql) > 0) {
                    while($result = mysqli_fetch_assoc($sql)){
                ?>
                <tr>
                    <th scope="row"><?php echo ++$n; ?></th>
                    <td><img src="g-berita/<?php echo $result['foto']; ?>" alt="gambar" class="img-thumbnail"></td>
                    <td><?php echo htmlspecialchars($result['judul']); ?></td>
                    <td><?php echo ($result['tanggal']); ?></td>
                    <td>
                        <?php
                        $teks = htmlspecialchars($result['teks']);
                        if (strlen($teks) > 100) {
                            echo substr($teks, 0, 100) . '... <a href="#" data-bs-toggle="modal" data-bs-target="#beritaModal' . $result['id'] . '">Baca Selengkapnya</a>';
                        } else {
                            echo $teks;
                        }
                        ?>
                    </td>
                    <td>
                        <a href="edit-berita.php?id=<?php echo $result['id']; ?>" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <a href="proses-berita.php?hapus=<?php echo $result['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                            <i class="bi bi-trash"></i> Hapus
                        </a>
                    </td>

                </tr>

                <!-- Modal untuk menampilkan teks berita selengkapnya -->
                <div class="modal fade" id="beritaModal<?php echo $result['id']; ?>" tabindex="-1" aria-labelledby="beritaModalLabel<?php echo $result['id']; ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="beritaModalLabel<?php echo $result['id']; ?>">Berita Selengkapnya: <?php echo $result['judul']; ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php echo nl2br(htmlspecialchars($result['teks'])); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                    }
                } else {
                    echo "<tr><td colspan='6' class='text-center'>Data berita tidak tersedia.</td></tr>";
                }
                ?>
            </tbody>
        </table>

    <?php include "layout/footer.html"; ?>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
