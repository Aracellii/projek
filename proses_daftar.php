<?php 
session_start();
$con = new mysqli('localhost', 'root', '', 'projek');
// Mendapatkan username dan password dari input form
$username = $_POST['username'];
$password = $_POST['password'];
// Buat query untuk mengecek apakah username dan password sudah ada

$cek = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($con, $cek);
// Cek apakah ada baris yang ditemukan
if (mysqli_num_rows($result) > 0) {
    echo "Username dan password sudah ada di database.";
    header("location:daftar.php?pesan=daftar_gagal");
} else {
    echo "Username dan password belum ada di database.";
    $data = $con->query("INSERT INTO user (username, password) VALUES ('$username', '$password');")
          or die($con->error);
          header("Location: login.php?pesan=daftar_berhasil");
    }
// Tutup koneksi
mysqli_close($query);
?>


