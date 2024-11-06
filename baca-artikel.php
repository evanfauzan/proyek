<?php
require 'koneksi.php';
session_start();

if (isset($_GET['artikel'])) {
    $artikel_id = $_GET['artikel'];

    // Query untuk mengambil artikel berdasarkan ID
    $query = "SELECT * FROM tb_artikel WHERE id = '$artikel_id'";
    $sql = mysqli_query($konek, $query);
    $result = mysqli_fetch_assoc($sql);

    if (!$result) {
        echo "<p>Artikel tidak ditemukan.</p>";
        exit();
    }
} else {
    echo "<p>ID artikel tidak ditemukan.</p>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($result['judul']); ?> - Yayasan Darul Qur'an</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <?php include 'layout/navbar.html'; ?>

    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <!-- Gambar Artikel -->
                    <img src="artikel/<?php echo $result['foto']; ?>" class="card-img-top img-fluid article-image"
                         alt="Gambar Artikel">
                    <div class="card-body">
                        <!-- Judul Artikel -->
                        <h1 class="card-title"><?php echo htmlspecialchars($result['judul']); ?></h1>
                        <!-- Teks Artikel -->
                        <p class="card-text">
                            <?php echo nl2br(htmlspecialchars($result['teks2'])); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
