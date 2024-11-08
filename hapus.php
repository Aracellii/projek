<?php
include 'menu.php';
// Detail koneksi database
$host = 'localhost';
$user = 'root'; // Ganti dengan nama pengguna database Anda
$pass = '';     // Ganti dengan kata sandi database Anda
$db = 'projek';  // Nama database
// Koneksi ke database MySQL
$kon = mysqli_connect($host, $user, $pass, $db);
$idmenu = $_GET['id'];
$qhapus = "DELETE FROM menu WHERE id_menu = '$idmenu'";
$hasil = mysqli_query($kon, $qhapus);
header("Location: menu.php");
?>