<?php
require 'koneksi.php';

// Proses menambah berita
if (isset($_POST['submit'])) {
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
    if ($stmt = mysqli_prepare($konek, $query)) {
        // Bind parameter dan eksekusi
        mysqli_stmt_bind_param($stmt, "ssss", $uniqueFileName, $judul, $tanggal, $teks);
        
        if (mysqli_stmt_execute($stmt)) {
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

// Proses menghapus gambar dari database
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $query = "SELECT foto FROM db_berita WHERE id = '$id'";
    $result = mysqli_query($konek, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $fileToDelete = $dir . $row['foto'];
        if (file_exists($fileToDelete)) {
            unlink($fileToDelete);
        }

        $query = "DELETE FROM db_berita WHERE id = '$id';";
        $sql = mysqli_query($konek, $query);

        if ($sql) {
            header("Location: tambah-berita.php");
        } else {
            echo "Gagal menghapus Data dari database.";
        }
    } else {
        echo "Data tidak ditemukan.";
    }
}

// Proses edit berita
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $teks = $_POST['teks'];

    // Mengecek apakah ada foto baru
    if ($_FILES['foto']['name'] != '') {
        $foto = $_FILES['foto']['name'];
        $tmpFile = $_FILES['foto']['tmp_name'];
        $fileExtension = pathinfo($foto, PATHINFO_EXTENSION);
        $uniqueFileName = uniqid('foto_', true) . '.' . $fileExtension;

        // Pindahkan file foto baru ke direktori
        move_uploaded_file($tmpFile, "g-berita/" . $uniqueFileName);

        // Mengambil nama file lama untuk dihapus
        $query = "SELECT foto FROM db_berita WHERE id = '$id'";
        $result = mysqli_query($konek, $query);
        $row = mysqli_fetch_assoc($result);
        $oldFile = $row['foto'];

        // Hapus file lama
        if (file_exists("g-berita/" . $oldFile)) {
            unlink("g-berita/" . $oldFile);
        }

        // Update data berita dengan foto baru
        $query = "UPDATE db_berita SET judul = ?, tanggal = ?, teks = ?, foto = ? WHERE id = ?";
        if ($stmt = mysqli_prepare($konek, $query)) {
            mysqli_stmt_bind_param($stmt, "ssssi", $judul, $tanggal, $teks, $uniqueFileName, $id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
    } else {
        // Update data tanpa mengganti foto
        $query = "UPDATE db_berita SET judul = ?, tanggal = ?, teks = ? WHERE id = ?";
        if ($stmt = mysqli_prepare($konek, $query)) {
            mysqli_stmt_bind_param($stmt, "sssi", $judul, $tanggal, $teks, $id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
    }

    header("Location: tambah-berita.php");
}
?>
