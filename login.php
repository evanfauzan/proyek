<?php
// Memulai sesi untuk memeriksa apakah pengguna sudah login
session_start();

// Mengecek apakah pengguna sudah login
if (isset($_SESSION['username'])) {
    // Jika sudah login, arahkan ke kelola.php
    header('Location: kelola.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>Login</title>
    <!-- Memasukkan CDN Bootstrap untuk styling -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Login</h2>
        <!-- Form login -->
        <form action="proses_login.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <!-- Memasukkan CDN Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
