<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Alamat email tujuan
    $to = "darulquranoki@gmail.com";

    // Subjek email
    $subject = "Pesan dari $name";

    // Isi email
    $body = "
    Nama: $name\n
    Email: $email\n
    Telepon: $phone\n
    Pesan: \n$message
    ";

    // Header email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Kirim email
    if (mail($to, $subject, $body, $headers)) {
        // Jika email terkirim, beri pesan sukses
        echo "<script>alert('Pesan berhasil dikirim!'); window.location.href = 'kontak.php';</script>";
    } else {
        // Jika gagal mengirim email, beri pesan error
        echo "<script>alert('Gagal mengirim pesan. Silakan coba lagi.'); window.location.href = 'kontak.php';</script>";
    }
}
?>
