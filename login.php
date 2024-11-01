echo"test";
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
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
       ?>
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
		<tr>
			<td><a href="daftar.php">Daftar Disini</a></td>
		</tr>
		</table>			
	</form>

</body>
</html>