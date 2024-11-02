<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- Header -->
	<div class="header">
        <div class="nav-container">
            <div class="nav">
                <div class="nav-brand">
                    <h1><a href="">Food<span>Stall</span></a></h1>
                </div>
                <div class="nav-menu">
                    <a href="">Home</a>
                    <a href="">About</a>
                    <a href="">Daily Market</a>
                    <a href="">Catalog</a>
                </div>
                <div class="profile">
                    <a class="btn" href="daftar.php">Regrister</a>
                </div>
            </div>
        </div>
    </div>

    <h2>login</h2>
    <?php 

    if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal")
			{
			echo "Login gagal! username dan password salah!";
			}else if($_GET['pesan'] == "logout"){
            echo "Anda telah berhasil logout";
			}else if($_GET['pesan'] == "belum_login")
			{
			echo "Anda harus login untuk mengakses halaman admin";
			}
    }
	if (isset($_GET['pesan']) && $_GET['pesan'] == 'daftar_berhasil') {
		echo "<p style='color: green;'>Pendaftaran berhasil! Silakan login.</p>";
	}
       ?>
	<div class="login-card">
    	<form method="POST" action="cek_login.php">
			<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>			
	</form>
	</div>
</body>
</html>