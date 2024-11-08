<?php
require "koneksi.php";

// Periksa jika tombol submit diklik
if (isset($_POST['submit'])) {
    // Ambil file yang diunggah
    $files = $_FILES['foto']; // $_FILES['foto'] akan berisi array dari file yang diunggah
    $dir = "images/"; // Direktori tempat file akan disimpan

    // Loop untuk memproses setiap file yang diunggah
    for ($i = 0; $i < count($files['name']); $i++) {
        // Ambil nama file dan ekstensi
        $foto = $files['name'][$i];
        $tmpFile = $files['tmp_name'][$i];

        // Periksa jika file tidak kosong
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
                    $query = "INSERT INTO db_gambar (foto) VALUES ('$uniqueFileName')";
                    $sql = mysqli_query($konek, $query);

                    // Mengecek apakah query berhasil
                    if (!$sql) {
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

    // Setelah semua file diproses, redirect ke halaman kelola
    header("Location: kelola.php");
    exit;
}


if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

    // Ambil nama file gambar berdasarkan id
    $query = "SELECT foto FROM db_gambar WHERE id = '$id'";
    $result = mysqli_query($konek, $query);
    $row = mysqli_fetch_assoc($result);

    // Jika file ditemukan, hapus file tersebut
    if ($row) {
        // Direktori tempat menyimpan gambar
        $dir = 'images/'; // Ganti dengan path folder yang sesuai
        $fileToDelete = $dir . $row['foto'];  // Nama file yang akan dihapus

        // Periksa apakah file ada sebelum menghapus
        if (file_exists($fileToDelete)) {
            // Hapus file gambar dari server
            if (unlink($fileToDelete)) {
                echo "File gambar berhasil dihapus dari server.";
            } else {
                echo "Gagal menghapus file gambar.";
            }
        } else {
            echo "File gambar tidak ditemukan di server.";
        }

        // Hapus data gambar dari database
        $query = "DELETE FROM db_gambar WHERE id = '$id';";
        $sql = mysqli_query($konek, $query);

        // Cek apakah penghapusan data berhasil
        if ($sql) {
            header("Location: kelola.php"); // Redirect setelah berhasil dihapus
            exit;  // Pastikan eksekusi script berhenti setelah redirect
        } else {
            echo "Gagal menghapus gambar dari database.";
        }
    } else {
        echo "Gambar tidak ditemukan dalam database.";
    }
}
?>
