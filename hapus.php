<?php
session_start();
include 'menu.php';
include 'db.php';
$qhapus = "DELETE FROM menu WHERE id_menu = $id";
$hasil = mysqli_query($conn, $qhapus);
header("location: menu.php");
?>
