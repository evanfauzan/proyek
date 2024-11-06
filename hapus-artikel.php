<?php
require 'koneksi.php';
session_start();

// Pastikan pengguna sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

// Periksa apakah ada ID artikel yang akan dihapus
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil nama foto artikel dari database sebelum menghapus
    $query = "SELECT foto FROM tb_artikel WHERE id = '$id'";
    $result = mysqli_query($konek, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $foto = $row['foto'];

        // Hapus foto dari folder
        $foto_path = 'artikel/' . $foto;
        if (file_exists($foto_path)) {
            unlink($foto_path); // Hapus file foto
        }

        // Hapus data artikel dari database
        $delete_query = "DELETE FROM tb_artikel WHERE id = '$id'";
        if (mysqli_query($konek, $delete_query)) {
            header("Location: tambah-artikel.php"); // Arahkan kembali setelah berhasil
        } else {
            echo "Gagal menghapus artikel: " . mysqli_error($konek);
        }
    } else {
        echo "Artikel tidak ditemukan!";
    }
} else {
    echo "ID artikel tidak ditemukan!";
}
?>
