<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>login</title>
</head>
<body>
    <h2>DAFTAR</h2>
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
        <td><input type="radio" name="role" value="admin">
        Admin</td>
        <td><input type="radio" name="role" value="user">
        User</td>
		</tr>
   
    	


		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" value="DAFTAR"></td>
		</tr>
		</table>			
	</form>

</body>
</html>