<?php
  require 'koneksi.php';
  session_start();

  // Cek apakah pengguna sudah login
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
      // Jika belum login, arahkan ke login.php
      header("Location: login.php");
      exit();
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
    <title>Yayasan Darul Qur'an</title>
</head>

<body>
    <?php include "layout/navbar2.html"; ?>

    <div class="container py-5">
        <h2 class="text-center mb-4">Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
        <p class="text-center mb-4">Ini adalah halaman kelola yang hanya dapat diakses setelah login.</p>
        <div class="text-center mb-4">
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
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
                        <div class="bg-info bg-gradient p-2 shadow rounded">
                            <p>Perhatian: Anda tidak dapat melakukan tombol enter untuk membuat garis baru. Gunakan simbol &lt;br&gt; untuk melakukan baris baru.</p>
                        </div>
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


                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary w-100" name="submit">Kirim</button>
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
                    <td><img src="g-berita/<?php echo $result['foto']; ?>" alt="gambar" class="img-fluid"></td>
                    <td><?php echo htmlspecialchars($result['judul']); ?></td>
                    <td><?php echo ($result['tanggal']); ?></td>
                    <td><?php echo nl2br(htmlspecialchars($result['teks'])); ?></td>
                    <td>
                        <a href="proses-berita.php?hapus=<?php echo $result['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                            <i class="bi bi-trash"></i> Hapus
                        </a>
                    </td>
                </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='6' class='text-center'>Data berita tidak tersedia.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php include "layout/footer.html"; ?>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
