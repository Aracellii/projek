<?php 
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
$query = 
$result = mysqli_query($kon, $query);

// Cek apakah query berhasil
if (!$result) {
    die("Error dalam pengambilan data: " . mysqli_error($conn));
}
?>




?>
