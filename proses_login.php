<?php
session_start();

// Mengimpor koneksi dari file koneksi.php
include 'koneksi.php'; // Menambahkan koneksi

// Mengecek apakah form login sudah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mengambil data user dari tabel tb_user
    $sql = "SELECT * FROM tb_user WHERE username = ? AND password = ?";
    $stmt = $konek->prepare($sql); // Menggunakan $konek dari koneksi.php
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Cek apakah ada user yang cocok
    if ($result->num_rows > 0) {
        // Jika berhasil login, simpan informasi user dalam session
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Redirect ke halaman kelola.php
        header("Location: kelola.php");
        exit();
    } else {
        // Jika login gagal, tampilkan pesan error
        echo "<script>alert('Username atau password salah!'); window.location.href='login.php';</script>";
    }
}

// Menutup koneksi
$konek->close(); // Menutup koneksi menggunakan $konek
?>
