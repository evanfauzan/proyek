<?php
require "koneksi.php";

if(isset($_POST['submit'])){
    $foto = $_FILES['foto']['name'];
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $teks = $_POST['teks'];

    $dir = "g-berita/";
    $tmpFile = $_FILES['foto']['tmp_name'];

    // Mengambil ekstensi file
    $fileExtension = pathinfo($foto, PATHINFO_EXTENSION);

    // Membuat nama file unik menggunakan uniqid dan menambahkan ekstensi file
    $uniqueFileName = uniqid('foto_', true) . '.' . $fileExtension;

    // Pindahkan file foto ke direktori dengan nama file yang unik
    move_uploaded_file($tmpFile, $dir . $uniqueFileName);

    // Menggunakan prepared statement untuk menghindari SQL Injection
    $query = "INSERT INTO db_berita (foto, judul, tanggal, teks) VALUES (?, ?, ?, ?)";
    if($stmt = mysqli_prepare($konek, $query)){
        // Bind parameter dan eksekusi
        mysqli_stmt_bind_param($stmt, "ssss", $uniqueFileName, $judul, $tanggal, $teks);
        
        if(mysqli_stmt_execute($stmt)){
            header("Location: tambah-berita.php");
        } else {
            echo "Gagal mengupload file.";
        }

        // Menutup statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Terjadi kesalahan saat menyiapkan query.";
    }
}
?>
