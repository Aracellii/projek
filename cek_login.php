<?php 
session_start();
$query = new mysqli('localhost', 'root', '', 'projek');
// Mendapatkan username dan password dari input form
$login = false;
if(isset($_POST['username']) || isset($_POST['password'])) {
// Menyeleksi data dari tabel 'user'
$username = $_POST['username'];
$password = $_POST['password'];
$data = $query->query("SELECT 'user' AS role FROM user WHERE username='$username' AND password='$password'");
if ($data->num_rows > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    $role = "user";
    $login = true;
    $_SESSION['role'] = $role; // Menyimpan role ke session
} 
    // Menyeleksi data dari tabel 'admin'
    $data = $query->query("SELECT 'admin' AS role FROM admin WHERE username='$username' AND password='$password'");
    if ($data->num_rows > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        $role = "admin";
        $_SESSION['role'] = $role; // Menyimpan role ke session
        $login=true;
    } }
?>
