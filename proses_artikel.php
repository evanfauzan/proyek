<?php
require 'koneksi.php';
session_start();

// Pastikan pengguna sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['submit'])) {
    // Ambil data dari form
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $teks = $_POST['teks'];

    // Proses upload gambar
    $foto = $_FILES['foto']['name'];
    $foto_temp = $_FILES['foto']['tmp_name'];
    $foto_size = $_FILES['foto']['size'];
    $foto_type = pathinfo($foto, PATHINFO_EXTENSION);
    
    // Validasi ekstensi gambar
    $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array(strtolower($foto_type), $allowed_ext)) {
        echo "Ekstensi gambar tidak valid!";
        exit();
    }

    // Tentukan nama file baru untuk menghindari nama duplikat
    $new_foto_name = time() . '.' . $foto_type;
    $upload_dir = 'artikel/'; // Folder untuk menyimpan gambar
    move_uploaded_file($foto_temp, $upload_dir . $new_foto_name);

    // Simpan ke dalam database
    $teks1 = substr($teks, 0, 100); // Ambil 100 karakter pertama untuk teks1
    $teks2 = $teks; // Teks lengkap untuk teks2

    // Query untuk memasukkan data artikel ke database
    $query = "INSERT INTO tb_artikel (foto, judul, teks1, teks2) 
              VALUES ('$new_foto_name', '$judul', '$teks1', '$teks2')";

    // Eksekusi query
    if (mysqli_query($konek, $query)) {
        header("Location: artikel.php"); // Arahkan ke halaman artikel setelah berhasil
        exit();
    } else {
        echo "Gagal menambah artikel: " . mysqli_error($konek);
    }
}
?>
