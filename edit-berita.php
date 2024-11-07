<?php
require 'koneksi.php';

// Ambil ID berita dari URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Ambil data berita berdasarkan ID
    $query = "SELECT * FROM db_berita WHERE id = ?";
    $stmt = mysqli_prepare($konek, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $berita = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);

    if (!$berita) {
        echo "Data berita tidak ditemukan.";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Memuat Font Awesome dari CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Edit Berita</title>
</head>
<body>
    <div class="container py-5">
        <h2 class="text-center mb-4">Edit Berita</h2>

        <form method="post" action="proses-berita.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $berita['id']; ?>">

            <!-- Foto Berita -->
            <div class="mb-3">
                <label for="foto" class="form-label">Foto Berita</label>
                <input type="file" class="form-control" id="foto" name="foto">
                <img src="g-berita/<?php echo $berita['foto']; ?>" alt="foto berita" class="img-fluid mt-2" style="max-width: 200px;">
            </div>

            <!-- Judul -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="judul" name="judul" value="<?php echo htmlspecialchars($berita['judul']); ?>" required>
                <label for="judul">Judul Berita</label>
            </div>

            <!-- Tanggal -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?php echo $berita['tanggal']; ?>" required>
                <label for="tanggal">Tanggal Berita</label>
            </div>

            <!-- Teks -->
            <div class="form-floating mb-3">
                <textarea class="form-control" id="teks" name="teks" style="height: 150px;" required><?php echo htmlspecialchars($berita['teks']); ?></textarea>
                <label for="teks">Teks Berita</label>
                <p id="hitung-huruf">Huruf: <?php echo strlen(htmlspecialchars($berita['teks'])); ?>/500</p>
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
                document.getElementById('teks').onkeyup = hitungHuruf;
            </script>

            <button type="submit" name="edit" class="btn btn-primary w-100">
                <i class="bi bi-save"></i> Simpan Perubahan
            </button>

        </form>
    </div>
    <?php include 'layout/footer.html'?>
</body>
</html>
