<?php
require 'koneksi.php';
session_start();

// Pastikan pengguna sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

// Ambil ID artikel dari parameter URL
$id_artikel = isset($_GET['id']) ? $_GET['id'] : null;
if ($id_artikel === null) {
    header("Location: tambah-artikel.php");
    exit();
}

// Ambil data artikel dari database
$query = "SELECT * FROM tb_artikel WHERE id = $id_artikel";
$result = mysqli_query($konek, $query);
if (mysqli_num_rows($result) == 0) {
    echo "Artikel tidak ditemukan.";
    exit();
}
$artikel = mysqli_fetch_assoc($result);

// Proses update artikel
if (isset($_POST['submit'])) {
    // Ambil data dari form
    $judul = $_POST['judul'];
    $teks1 = $_POST['teks1'];
    $teks2 = $_POST['teks2'];

    // Proses upload gambar jika ada
    $foto = $_FILES['foto']['name'];
    $foto_temp = $_FILES['foto']['tmp_name'];
    $foto_size = $_FILES['foto']['size'];
    $foto_type = pathinfo($foto, PATHINFO_EXTENSION);

    if (!empty($foto)) {
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

        // Update artikel dengan gambar baru
        $query_update = "UPDATE tb_artikel SET foto='$new_foto_name', judul='$judul', teks1='$teks1', teks2='$teks2' WHERE id=$id_artikel";
    } else {
        // Jika tidak ada gambar baru, hanya update teks
        $query_update = "UPDATE tb_artikel SET judul='$judul', teks1='$teks1', teks2='$teks2' WHERE id=$id_artikel";
    }

    // Eksekusi query update
    if (mysqli_query($konek, $query_update)) {
        header("Location: tambah-artikel.php"); // Arahkan kembali ke halaman artikel setelah berhasil
        exit();
    } else {
        echo "Gagal memperbarui artikel: " . mysqli_error($konek);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <!-- Menambahkan Font Awesome dari CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Edit Artikel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <?php include 'layout/navbar2.html'; ?>
    <h2 class="text-center mb-4">Edit Artikel</h2>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <form method="post" enctype="multipart/form-data">
                    <!-- Input Judul -->
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Artikel</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $artikel['judul']; ?>" required>
                    </div>

                    <!-- Input Foto -->
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto Artikel (Kosongkan jika tidak ingin mengganti)</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                        <small class="form-text text-muted">Foto saat ini: <img src="artikel/<?php echo $artikel['foto']; ?>" alt="Foto Artikel" class="img-fluid" style="max-width: 100px;"></small>
                    </div>

                    <!-- Input Teks 1 (Ringkasan) -->
                    <div class="mb-3">
                        <label for="teks1" class="form-label">Teks 1 (Ringkasan)</label>
                        <textarea class="form-control" id="teks1" name="teks1" rows="3" required><?php echo $artikel['teks1']; ?></textarea>
                    </div>

                    <!-- Input Teks 2 (Artikel Lengkap) -->
                    <div class="mb-3">
                        <label for="teks2" class="form-label">Teks 2 (Artikel Lengkap)</label>
                        <textarea class="form-control" id="teks2" name="teks2" rows="5" required><?php echo $artikel['teks2']; ?></textarea>
                    </div>

                        <!-- Tombol Submit -->
                    <button type="submit" class="btn btn-primary w-100" name="submit">
                        <i class="fas fa-save"></i> Perbarui Artikel
                    </button>

                </form>
            </div>
        </div>
    </div>

    <?php include 'layout/footer.html'; ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
