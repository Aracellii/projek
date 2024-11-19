<?php 
include 'cek_login.php';
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// Query untuk mengambil data produk
$query = "SELECT id_menu, nama_menu, jenis_menu,deskripsi,harga,gambar FROM menu WHERE jenis_menu='makanan';";
$kueri  = "SELECT id_menu, nama_menu, jenis_menu,deskripsi,harga,gambar FROM menu WHERE jenis_menu='minuman';";
$querysemua = "SELECT id_menu, nama_menu, jenis_menu,deskripsi,harga,gambar FROM menu;";
$tampil = mysqli_query($conn, $querysemua);
$result = mysqli_query($conn, $query);
$hasil = mysqli_query($conn, $kueri);
// Cek apakah query berhasil
if (!$result) {
    die("Error dalam pengambilan data: " . mysqli_error($conn));
}
// Tutup koneksi
mysqli_close($conn);
?>
