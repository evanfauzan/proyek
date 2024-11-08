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
    <style>
        /* Menyesuaikan gambar artikel */
        .article-image {
            object-fit: cover; /* Memastikan gambar menyesuaikan tanpa merusak aspek rasio */
            height: 400px; /* Sesuaikan dengan ukuran gambar yang ideal */
            transition: transform 0.3s ease-in-out; /* Efek zoom */
        }

        .card:hover .article-image {
            transform: scale(1.05); /* Efek zoom pada gambar saat hover */
        }

        /* Menambah animasi efek hover pada card */
        .card:hover {
            transform: translateY(-5px); /* Efek transisi saat hover */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); /* Shadow lebih tajam saat hover */
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        /* Menyesuaikan style untuk font dan warna teks */
        .card-title {
            font-family: 'Merriweather', serif;
            color: #2c3e50; /* Warna gelap yang elegan */
        }

        .card-text {
            font-family: 'Open Sans', sans-serif;
            color: #4d4d4d; /* Warna abu-abu lembut untuk teks */
            line-height: 1.7; /* Memberikan jarak yang cukup antar baris */
        }

        /* Card Styling */
        .card {
            background-color: #fff; /* Latar belakang putih untuk kesan bersih */
            border-radius: 15px; /* Membuat sudut lebih halus */
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1); /* Shadow untuk kedalaman */
        }

    </style>
</head>
<body style="background-image: url(background1.png)">

    <?php include 'layout/navbar.html'; ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="card shadow-lg border-0 rounded-lg overflow-hidden">
                    <!-- Gambar Artikel -->
                    <img src="artikel/<?php echo $result['foto']; ?>" class="card-img-top img-fluid article-image" alt="Gambar Artikel">
                    
                    <div class="card-body p-5">
                        <!-- Judul Artikel -->
                        <h1 class="card-title mb-4 text-dark font-weight-bold" style="font-size: 3rem; font-family: 'Merriweather', serif;">
                            <?php echo htmlspecialchars($result['judul']); ?>
                        </h1>
                        
                        <!-- Teks Artikel -->
                        <div class="card-text" style="white-space: pre-line; font-size: 1.125rem; line-height: 1.7; font-family: 'Open Sans', sans-serif; color: #4d4d4d;">
                            <?php echo html_entity_decode($result['teks2']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <br>
    <?php include 'layout/footer.html';?>
</body>
</html>
