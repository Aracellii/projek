<?php
$login = include 'db.php';
if ($login) {
    header("Location: main.php");
    exit();
} else {
    header("Location: login.php?pesan=gagal");
    exit();
}
?>
