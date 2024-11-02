<?php 
session_start();
$query = new mysqli('localhost', 'root', '', 'projek');
// Mendapatkan username dan password dari input form

$username = $_POST['username'];
$password = $_POST['password'];
$data = $query->query("INSERT INTO user (username, password) VALUES ('$username', '$password');")
          or die($query->error);
          <?php
// Buat query untuk mengecek apakah username dan password sudah ada
$cek = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($connection, $cek);

// Cek apakah ada baris yang ditemukan
if (mysqli_num_rows($result) > 0) {
    echo "Username dan password sudah ada di database.";
} else {
    echo "Username dan password belum ada di database.";
}

// Tutup koneksi
mysqli_close($connection);
?>

?>
