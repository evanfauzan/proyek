<?php
require "koneksi.php";

// Periksa jika tombol submit diklik
if (isset($_POST['submit'])) {
    // Cek apakah ada file yang diunggah
    if (!empty($_FILES['foto']['name'][0])) { // Memeriksa apakah ada file
        $dir = "MA/"; // Direktori tempat file akan disimpan

        // Loop untuk mengupload setiap file
        $totalFiles = count($_FILES['foto']['name']); // Jumlah file yang diunggah
        for ($i = 0; $i < $totalFiles; $i++) {
            // Ambil nama file, ekstensi, dan file sementara untuk setiap file
            $foto = $_FILES['foto']['name'][$i];
            $tmpFile = $_FILES['foto']['tmp_name'][$i];

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
                    $query = "INSERT INTO db_gambar_ma (foto) VALUES ('$uniqueFileName')";
                    $sql = mysqli_query($konek, $query);

                    // Mengecek apakah query berhasil
                    if (!$sql) {
                        echo "Gagal mengupload file ke database: " . mysqli_error($konek);
                    }
                } else {
                    echo "Gagal memindahkan file: $foto<br>";
                }
            } else {
                echo "Ekstensi file $foto tidak valid. Hanya gambar dengan ekstensi JPG, JPEG, PNG, dan GIF yang diperbolehkan.<br>";
            }
        }

        // Redirect setelah semua file berhasil diupload
        header("Location: kelola4.php");
        exit;
    } else {
        echo "Tidak ada file yang dipilih untuk diupload.";
    }
}

// Proses menghapus gambar dari database
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

    // Tentukan direktori tempat gambar berada
    $dir = 'MA/';  // Direktori tempat gambar berada

    // Ambil nama file gambar berdasarkan id
    $query = "SELECT foto FROM db_gambar_ma WHERE id = '$id'";
    $result = mysqli_query($konek, $query);
    $row = mysqli_fetch_assoc($result);

    // Jika file ditemukan, hapus file tersebut
    if ($row) {
        $fileToDelete = $dir . $row['foto'];  // Gabungkan direktori dengan nama file

        // Hapus gambar dari server
        if (file_exists($fileToDelete)) {
            unlink($fileToDelete);  // Menghapus file dari server
        } else {
            echo "File gambar tidak ditemukan di server.";
        }

        // Hapus data gambar dari database
        $query = "DELETE FROM db_gambar_ma WHERE id = '$id';";
        $sql = mysqli_query($konek, $query);
        
        if ($sql) {
            header("Location: kelola4.php");  // Redirect setelah berhasil dihapus
            exit();  // Pastikan tidak ada proses lebih lanjut setelah redirect
        } else {
            echo "Gagal menghapus gambar dari database.";
        }
    } else {
        echo "Gambar tidak ditemukan di database.";
    }
}
?>
