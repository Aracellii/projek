<?php 
session_start();
$query = new mysqli('localhost', 'root', '', 'projek');
// Mendapatkan username dan password dari input form
$username = $_POST['username'];
$password = $_POST['password'];
$data = $query->query("INSERT INTO user (username, password) VALUES ('$username', '$password');")
          or die($query->error);
?>
