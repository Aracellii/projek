echo"hi;<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h2>login</h2>
    <form method="POST" action="proses_daftar.php">
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

</body>
</html>