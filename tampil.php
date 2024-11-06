<?php 

// Detail koneksi database
$host = 'localhost';
$user = 'root'; // Ganti dengan nama pengguna database Anda
$pass = '';     // Ganti dengan kata sandi database Anda
$db = 'projek';  // Nama database

// Koneksi ke database MySQL
$kon = mysqli_connect($host, $user, $pass, $db);
if (!$kon) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// Query untuk mengambil data produk
$query = "SELECT id_menu, nama_menu, jenis_menu,deskripsi,harga FROM menu WHERE jenis_menu='makanan';";
$kueri  = "SELECT id_menu, nama_menu, jenis_menu,deskripsi,harga FROM menu WHERE jenis_menu='minuman';";
$querysemua = "SELECT id_menu, nama_menu, jenis_menu,deskripsi,harga FROM menu;";

$tampil = mysqli_query($kon, $querysemua);
$result = mysqli_query($kon, $query);
$hasil = mysqli_query($kon, $kueri);

// Cek apakah query berhasil
if (!$result) {
    die("Error dalam pengambilan data: " . mysqli_error($kon));
}
// Tutup koneksi
mysqli_close($kon);
?>
