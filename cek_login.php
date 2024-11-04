<?php 
session_start();
$query = new mysqli('localhost', 'root', '', 'projek');

// Mendapatkan username dan password dari input form
$username = $_POST['username'];
$password = $_POST['password'];

// Menyeleksi data dari tabel 'user'
$data = $query->query("SELECT 'user' AS role FROM user WHERE username='$username' AND password='$password'");
if ($data->num_rows > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    $role = "user";
    $_SESSION['role'] = $role; // Menyimpan role ke session
    header("location:session.php");
} else {
    // Menyeleksi data dari tabel 'admin'
    $data = $query->query("SELECT 'admin' AS role FROM admin WHERE username='$username' AND password='$password'");
    if ($data->num_rows > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        $role = "admin";
        $_SESSION['role'] = $role; // Menyimpan role ke session
        header("location:session.php");
    } else {
        header("location:login.php?pesan=gagal");
    }
}
?>
