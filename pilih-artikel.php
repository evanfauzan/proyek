<?php
require 'koneksi.php';
$query = "SELECT * FROM tb_artikel ORDER BY id DESC"; // Ambil artikel terbaru
$sql = mysqli_query($konek, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel - Yayasan Darul Qur'an</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <style>
        .card {
            height: 100%;
        }
        .card:hover {
            transform: scale(1.02);
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body style="background-image: url(background1.png)">
    <?php include 'layout/navbar.html'; ?>
    <div class="container py-5">
        <h2 class="text-center mb-4">Daftar Artikel</h2>
        <div class="row">
            <?php
            if (mysqli_num_rows($sql) > 0) {
                while ($result = mysqli_fetch_assoc($sql)) {
                    ?>
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card hover-effect shadow">
                            <!-- Gambar Artikel -->
                            <img src="artikel/<?php echo $result['foto']; ?>" alt="Thumbnail Artikel"
                                 class="card-img-top">
                            <div class="card-body">
                                <!-- Judul Artikel -->
                                <h5 class="card-title"><?php echo htmlspecialchars($result['judul']); ?></h5>
                                <!-- Teks Singkat Artikel -->
                                <p class="card-text"><?php echo htmlspecialchars($result['teks1']); ?></p>
                                <!-- Link ke halaman baca artikel -->
                                <a href="baca-artikel.php?artikel=<?php echo $result['id']; ?>" class="btn btn-primary mb-1">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p class='text-center'>Tidak ada artikel yang tersedia.</p>";
            }
            ?>
        </div>
    </div>
    <?php include 'layout/footer.html';?>
</body>
</html>
