<?php
session_start();
// Detail koneksi database
$host = 'localhost';
$user = 'root'; // Ganti dengan nama pengguna database Anda
$pass = '';     // Ganti dengan kata sandi database Anda
$db = 'projek';  // Nama database
// Koneksi ke database MySQL
$kon = new mysqli($host, $user, $pass, $db);
$id = $_GET['id'];
$qhapus = "DELETE FROM menu WHERE id_menu = $id";
$hasil = mysqli_query($kon, $qhapus);
header("location: menu.php");
?>
