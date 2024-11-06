<?php
session_start();

// Menghapus session dan data login
session_unset();
session_destroy();

// Redirect ke login.php setelah logout
header("Location: login.php");
exit();
?>
