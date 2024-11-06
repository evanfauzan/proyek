<?php
require 'koneksi.php';
session_start();

// Pastikan pengguna sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

// Proses pengiriman data form
if (isset($_POST['submit'])) {
    // Ambil data dari form
    $judul = $_POST['judul'];
    $teks1 = $_POST['teks1'];
    $teks2 = $_POST['teks2'];

    // Proses upload gambar
    $foto = $_FILES['foto']['name'];
    $foto_temp = $_FILES['foto']['tmp_name'];
    $foto_size = $_FILES['foto']['size'];
    $foto_type = pathinfo($foto, PATHINFO_EXTENSION);

    // Validasi ekstensi gambar
    $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array(strtolower($foto_type), $allowed_ext)) {
        echo "Ekstensi gambar tidak valid! Hanya gambar dengan ekstensi JPG, JPEG, PNG, atau GIF yang diperbolehkan.";
        exit();
    }

    // Tentukan nama file baru untuk menghindari nama duplikat
    $new_foto_name = time() . '.' . $foto_type;
    $upload_dir = 'artikel/'; // Folder untuk menyimpan gambar

    // Pindahkan file gambar ke direktori tujuan
    if (!move_uploaded_file($foto_temp, $upload_dir . $new_foto_name)) {
        echo "Gagal mengupload gambar.";
        exit();
    }

    // Simpan artikel ke dalam database
    $query = "INSERT INTO tb_artikel (foto, judul, teks1, teks2) 
              VALUES ('$new_foto_name', '$judul', '$teks1', '$teks2')";

    if (mysqli_query($konek, $query)) {
        header("Location: tambah-artikel.php"); // Arahkan kembali ke halaman artikel setelah berhasil
        exit();
    } else {
        echo "Gagal menambah artikel: " . mysqli_error($konek);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>Tambah Artikel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <?php include 'layout/navbar2.html'; ?>
    <h2 class="text-center mb-4">Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
    <p class="text-center mb-4">Ini adalah halaman kelola yang hanya dapat diakses setelah login.</p>
    <div class="text-center mb-4">
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
    <div class="container py-5">
        <h2 class="text-center mb-4">Tambah Artikel</h2>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <form method="post" enctype="multipart/form-data">
                    <!-- Input Judul -->
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Artikel</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Artikel" required>
                    </div>

                    <!-- Input Foto -->
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto Artikel</label>
                        <input type="file" class="form-control" id="foto" name="foto" required>
                    </div>

                    <!-- Input Teks 1 (Ringkasan) -->
                    <div class="mb-3">
                        <label for="teks1" class="form-label">Teks 1 (Ringkasan)</label>
                        <textarea class="form-control" id="teks1" name="teks1" placeholder="Masukkan Ringkasan Artikel" rows="3" required></textarea>
                    </div>

                    <!-- Input Teks 2 (Artikel Lengkap) -->
                    <div class="mb-3">
                        <label for="teks2" class="form-label">Teks 2 (Artikel Lengkap)</label>
                        <textarea class="form-control" id="teks2" name="teks2" placeholder="Masukkan Artikel Lengkap" rows="5" required></textarea>
                    </div>

                    <!-- Tombol Submit -->
                    <button type="submit" class="btn btn-primary w-100" name="submit">Tambah Artikel</button>
                </form>
            </div>
        </div>

        <!-- Tabel Daftar Artikel yang Diupload -->
        <div class="mt-5">
            <h3 class="text-center mb-4">Daftar Artikel yang Diupload</h3>

            <div class="card shadow-sm">
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Foto Artikel</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Ringkasan</th>
                                <th scope="col">Artikel Lengkap</th>
                                <th scope="col">Kontrol</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Mengambil data artikel dari database
                            $query = "SELECT * FROM tb_artikel";
                            $result = mysqli_query($konek, $query);

                            // Cek apakah data ada
                            if (mysqli_num_rows($result) > 0) {
                                $n = 0;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo ++$n; ?></th>
                                        <td><img src="artikel/<?php echo $row['foto']; ?>" alt="Foto Artikel" class="img-fluid" style="max-width: 100px;"></td>
                                        <td><?php echo $row['judul']; ?></td>
                                        <td><?php echo substr($row['teks1'], 0, 100) . '...'; ?></td>
                                        <td><?php echo substr($row['teks2'], 0, 100) . '...'; ?> <a href="#" data-bs-toggle="modal" data-bs-target="#artikelModal<?php echo $row['id']; ?>">Lihat Selengkapnya</a></td>
                                        <td>
                                            <!-- Hapus Artikel -->
                                            <a href="hapus-artikel.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Hapus</a>
                                        </td>
                                    </tr>

                                    <!-- Modal untuk menampilkan artikel lengkap -->
                                    <div class="modal fade" id="artikelModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="artikelModalLabel<?php echo $row['id']; ?>" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="artikelModalLabel<?php echo $row['id']; ?>">Artikel Lengkap: <?php echo $row['judul']; ?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php echo nl2br($row['teks2']); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                }
                            } else {
                                echo "<tr><td colspan='6' class='text-center'>Tidak ada artikel yang tersedia.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php include 'layout/footer.html'; ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
