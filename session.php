<?php
session_start();
// Memeriksa apakah pengguna sudah login
if (empty($_SESSION['username'])) {
    header("location:login.php?pesan=belum_login");
    exit();
}

?>
<html>
<head>
  <title>Halaman Session</title>
</head>
<body>
   <?php
     // Menampilkan username
     echo "Username: " . $_SESSION['username'] . "<br>";
   ?>   
<br>
<a href="logout.php">Logout</a>
</body>
</html>
