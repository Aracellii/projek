	<?php
	session_start();
	include 'db.php';
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// Menyambung ke database
		$query = new mysqli('localhost', 'root', '', 'projek');
	
		// Memastikan koneksi berhasil
		if ($query->connect_error) {
			die("Koneksi gagal: " . $query->connect_error);
		}
		// Mengambil data dari form
		$username = $_POST['username'];
		$password = $_POST['password'];
		// Menyeleksi data dari tabel 'user'
		$data = $query->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
		// Jika data ditemukan di tabel 'user'
		if ($data->num_rows > 0) {
			$_SESSION['username'] = $username;
			$user = $data->fetch_assoc();
			$_SESSION['id'] = $user['id_user'];
			$_SESSION['login'] = true;
			$_SESSION['role'] = "user"; // Menyimpan role ke session
			header("Location: main.php");
			exit();
		}
		// Menyeleksi data dari tabel 'admin'
		$dataadmin = $query->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
		// Jika data ditemukan di tabel 'admin'
		if ($dataadmin->num_rows > 0) {
			$_SESSION['username'] = $username;
			$admin = $dataadmin->fetch_assoc();
			$_SESSION['id'] = $admin['id_admin'];
			$_SESSION['login'] = true;
			$_SESSION['role'] = "admin"; // Menyimpan role ke session
			header("Location: main.php");
			exit();
		}
		else{
			header("Location: login.php?pesan=belum_login");
		}
		}
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>login</title>
		<link rel="stylesheet" href="style1.css">
	</head>
	<body>
		<!-- Header -->
		<div class="header">
			<div class="nav-container">
				<div class="nav">
					<div class="nav-brand">
						<h1><a href="">Makanan<span>Ku</span></a></h1>
					</div>
				
				</div>
			</div>
		</div>
	<!--Login Card-->
	<form-body>
		<div class="login-card">
			
			<h2>Log<span>in</span></h2>

			<form method="post" action="">
			<?php 
			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal")
					{	
					echo '<p style="text-align: center";> 	</p>';		
					}
					else if($_GET['pesan'] == "logout"){
					echo "Anda telah berhasil logout";
					}else if($_GET['pesan'] == "belum_login")
					{
					echo "Username atau Password salah!";
					}
					else if($_GET['pesan']=="andabelumlogin"){
						echo "anda belum login";
					}
			}
			if (isset($_GET['pesan']) && $_GET['pesan'] == 'daftar_berhasil') {
				echo "<p style='color: white;'>Pendaftaran berhasil! Silakan login.</p>";
			}
			
			?>
				<input type="text" name="username" placeholder="Username" required>
				<input type="password" name="password" placeholder="Password" required>
					<div class="tombol-login">
					<button type="submit">
						Log In
					</button>
					</div>
					</form>
						<p>
							------- Belum punya akun? -------
						</p>
						<a type="" href="daftar.php"> <button>
						Register
						</button>
					<a>
		</div>
	<form-body>
	</div>
	</body>

	</html>