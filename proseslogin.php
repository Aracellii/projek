<?php
$login = include 'cek_login.php';
if ($login) {
    header("Location: session.php");
    exit();
} else {
    header("Location: login.php?pesan=gagal");
    exit();
}
?>
