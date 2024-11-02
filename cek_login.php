<?php 
session_start();
$query = new mysqli('localhost', 'root', '', 'projek');
// Mendapatkan username dan password dari input form
$username = $_POST['username'];
$password = $_POST['password'];

// Menyeleksi data dari tabel 'user' dan 'admin' sekaligus
$data = $query->query("SELECT 'user' AS role FROM user WHERE username='$username' AND password='$password'
                       UNION
                       SELECT 'admin' AS role FROM admin WHERE username='$username' AND password='$password'")
          or die($query->error);

// Mengecek apakah ada data yang ditemukan
if ($data->num_rows > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
	$_SESSION['role'] = $row['role'];
    header("location:session.php");
} else {
    header("location:login.php?pesan=gagal");
}
?>
