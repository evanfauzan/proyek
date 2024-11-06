<?php
session_start();

// Data username dan password yang benar
$correct_username = 'darulquranoki';
$correct_password = 'amanah123';

// Mengecek apakah form login sudah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek username dan password
    if ($username == $correct_username && $password == $correct_password) {
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
?>
