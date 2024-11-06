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
$query = "SELECT id_menu, nama_menu, jenis_menu, harga FROM menu";
$result = mysqli_query($kon, $query);

// Cek apakah query berhasil
if (!$result) {
    die("Error dalam pengambilan data: " . mysqli_error($kon));
}
while ($product = mysqli_fetch_assoc($result)): 
    echo "ID Menu: " . $product["id_menu"] . "<br>";
    echo "Nama Menu: " . $product["nama_menu"] . "<br>";
    echo "Jenis Menu: " . $product["jenis_menu"] . "<br>";
    echo "Harga: " . $product["harga"] . "<br>";
?>
    <img src="gambar/<?php echo $product['nama_menu']; ?>.jpg" alt="<?php echo $product['nama_menu']; ?>"><br><br>
<?php
endwhile;
// Tutup koneksi
mysqli_close($kon);
?>
