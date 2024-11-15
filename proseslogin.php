<?php
$login = include 'cek_login.php';
if ($login) {
    header("Location: main.php");
    exit();
} else {
    header("Location: login.php?pesan=gagal");
    exit();
}
?>
