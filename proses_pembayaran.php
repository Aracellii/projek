<?php
session_start();
if (isset($_POST['id_menu'], $_POST['nama_menu'], $_POST['harga'], $_POST['jumlah'])) {
    $id_menu = $_POST['id_menu'];
    $nama_menu = $_POST['nama_menu'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    // Menghitung total
    $total = $harga * $jumlah;
    echo "<h1>Detail Pembayaran</h1>";
    echo "<p>Menu  : $nama_menu</p>";
    echo "<p>Harga : Rp $harga</p>";
    echo "<p>Jumlah: $jumlah</p>";
    echo "<p>Total : Rp $total</p>";
    echo $_SESSION['username'];
} else {
    echo "Data tidak ditemukan";
}
?>
