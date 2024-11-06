<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body>
	<!-- Header -->
	<div class="header">
        <div class="nav-container">
            <div class="nav">
                <div class="nav-brand">
                    <h1><a href="">Food<span>Stall</span></a></h1>
                </div>
             
            </div>
        </div>
    </div>
		
<!--Login Card-->
<form method="POST" action="proses_daftar.php">
		<?php
		if (isset($_GET['pesan']) && $_GET['pesan'] == 'daftar_gagal') {
			echo "<p style='color: red;'>Pendaftaran gagal: Username dan password sudah ada di database.</p>";
		}
		?>	
<form-body>
	<div class="login-card">
    	<h2>Register</h2>
    	<form>
        	<input type="text" name= "username"placeholder="Username" required>
        	<input type="password" name= "password" placeholder="Password" required>
			<div class="tombol-login">
        	<button type="submit">Register</button>
			</div>
	</div>
	</div>
 </login-body>
	</form>
</body>
</html>