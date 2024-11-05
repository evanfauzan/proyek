<?php
require "koneksi.php";
if(isset($_POST['submit'])){
    $foto = $_FILES['foto']['name'];

    $dir = "images/";
    $tmpFile = $_FILES['foto']['tmp_name'];

    move_uploaded_file($tmpFile, $dir.$foto);

    $query = "INSERT INTO db_gambar VALUES (null, '$foto')";
    $sql = mysqli_query($konek, $query);
    if($sql){
        header("Location: kelola.php");
    } else {
        echo "Gagal mengupload file.";
    }
}
?>
<?php
require "koneksi.php";

if(isset($_POST['submit'])){
    $foto = $_FILES['foto']['name'];
    $dir = "images/";  // Direktori tempat file disimpan
    $tmpFile = $_FILES['foto']['tmp_name'];

    // Mengambil ekstensi file
    $fileExtension = pathinfo($foto, PATHINFO_EXTENSION);

    // Membuat nama file unik dengan menambahkan uniqid dan ekstensi file
    $uniqueFileName = uniqid('foto_', true) . '.' . $fileExtension;

    // Memindahkan file dengan nama unik ke direktori
    move_uploaded_file($tmpFile, $dir . $uniqueFileName);

    // Menyimpan nama file unik ke database
    $query = "INSERT INTO db_gambar (foto) VALUES ('$uniqueFileName')";
    $sql = mysqli_query($konek, $query);

    // Mengecek apakah query berhasil
    if($sql){
        header("Location: kelola.php");  // Redirect jika berhasil
    } else {
        echo "Gagal mengupload file.";  // Pesan error jika gagal
    }
}
?>
