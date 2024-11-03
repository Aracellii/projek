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
                    <h1><a href="">Food<span>Stall</span></a></h1>
                </div>
                <div class="nav-menu">
                    <a href="">Home</a>
                    <a href="">About</a>
                    <a href="">Daily Market</a>
                    <a href="">Catalog</a>
                </div>
            </div>
        </div>
    </div>

		<?php
		if (isset($_GET['pesan']) && $_GET['pesan'] == 'daftar_gagal') {
			echo "Pendaftaran gagal: Username dan password sudah ada di database.";
		}
		?>

<!--Login Card-->
<form-body>
	<div class="login-card">
    	<h2>Register</h2>
    	<form>
        	<input type="text" placeholder="Username" required>
        	<input type="password" placeholder="Password" required>

	<div class="checkboxes">
			<div class="row"> 		
				<input type="radio" name="role" value="admin">Admin
			</div>
			<div class="row">	
				<input type="radio" name="role" value="user">User
	</div>
	</div>
        	<button type="submit">Register</button>
    	</form>
 </login-body>
</body>
</html>