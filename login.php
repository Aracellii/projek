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
               
            </div>
        </div>
    </div>

    
   

<!--Login Card-->
<form-body>
	<div class="login-card">
		
    	<h2>Log<span>in</span></h2>

    	<form method="POST" action="cek_login.php">

		<?php 

		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal")
				{
				
				echo '<p style="text-align: center";> username dan password salah! </p>';
				
				}
				else if($_GET['pesan'] == "logout"){
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