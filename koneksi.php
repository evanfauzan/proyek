<?php
    $lokal = "localhost";
    $username = "root";
    $password = ""; // Pastikan password ini sesuai dengan password basis data Anda
    $db = "gambar";

    $konek = mysqli_connect($lokal, $username, $password, $db);
    
    // Menambahkan penanganan kesalahan
    if (!$konek) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    mysqli_select_db($konek, $db);
?>