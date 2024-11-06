<?php
require "koneksi.php";

// Periksa jika tombol submit diklik
if (isset($_POST['submit'])) {
    // Ambil nama file yang diunggah
    $foto = $_FILES['foto']['name'];
    $dir = "MTS/"; // Direktori tempat file akan disimpan
    $tmpFile = $_FILES['foto']['tmp_name'];

    // Periksa jika file yang diunggah tidak kosong dan merupakan gambar
    if (!empty($foto)) {
        // Mendapatkan ekstensi file
        $fileExtension = strtolower(pathinfo($foto, PATHINFO_EXTENSION));
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

        // Cek jika ekstensi file valid
        if (in_array($fileExtension, $allowedExtensions)) {
            // Membuat nama file unik dengan uniqid
            $uniqueFileName = uniqid('foto_', true) . '.' . $fileExtension;

            // Mengecek apakah file dengan nama unik sudah ada di direktori
            while (file_exists($dir . $uniqueFileName)) {
                // Jika sudah ada, buat nama baru yang lebih unik
                $uniqueFileName = uniqid('foto_', true) . '.' . $fileExtension;
            }

            // Memindahkan file ke direktori tujuan
            if (move_uploaded_file($tmpFile, $dir . $uniqueFileName)) {
                // Menyimpan nama file unik ke database
                $query = "INSERT INTO db_gambar_mts (foto) VALUES ('$uniqueFileName')";
                $sql = mysqli_query($konek, $query);

                // Mengecek apakah query berhasil
                if ($sql) {
                    header("Location: kelola3.php"); // Redirect ke halaman kelola
                    exit;
                } else {
                    echo "Gagal mengupload file ke database.";
                }
            } else {
                echo "Gagal memindahkan file.";
            }
        } else {
            echo "Ekstensi file tidak valid. Hanya gambar dengan ekstensi JPG, JPEG, PNG, dan GIF yang diperbolehkan.";
        }
    } else {
        echo "File yang diunggah kosong.";
    }
}

// Proses menghapus gambar dari database
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    // Ambil nama file gambar berdasarkan id
    $query = "SELECT foto FROM db_gambar_mts WHERE id = '$id'";
    $result = mysqli_query($konek, $query);
    $row = mysqli_fetch_assoc($result);

    // Jika file ditemukan, hapus file tersebut
    if ($row) {
        $fileToDelete = $dir . $row['foto'];
        // Hapus gambar dari server
        if (file_exists($fileToDelete)) {
            unlink($fileToDelete);
        }

        // Hapus data gambar dari database
        $query = "DELETE FROM db_gambar_mts WHERE id = '$id';";
        $sql = mysqli_query($konek, $query);
        
        if ($sql) {
            header("Location: kelola3.php"); // Redirect setelah berhasil dihapus
        } else {
            echo "Gagal menghapus gambar dari database.";
        }
    } else {
        echo "Gambar tidak ditemukan.";
    }
}
?>
