<?php 
session_start();
$query = new mysqli('localhost', 'root', '', 'projek');
// Mendapatkan username dan password dari input form
$username = $_POST['username'];
$password = $_POST['password'];
$posisi = $_POST['role'];
// Buat query untuk mengecek apakah username dan password sudah ada
if($posisi=="user"){
$cek = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($query, $cek);
}
elseif($posisi=="admin"){
 $cek = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($query, $cek);
}
// Cek apakah ada baris yang ditemukan
if (mysqli_num_rows($result) > 0) {
    echo "Username dan password sudah ada di database.";
    header("location:daftar.php?pesan=daftar gagal");
} else {
    echo "Username dan password belum ada di database.";
    if($posisi=="user"){
    $data = $query->query("INSERT INTO user (username, password) VALUES ('$username', '$password');")
          or die($query->error);}
    elseif($posisi=="admin"){
        $data = $query->query("INSERT INTO admin (username, password) VALUES ('$username', '$password');")
        or die($query->error);}
        header("location:login.php?pesan=daftar berhasil");
    }
// Tutup koneksi
mysqli_close($query);
?>


