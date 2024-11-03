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
<!--Login Card-->
<form-body>
	<div class="login-card">
		
    	<h2>Log<span>in</span></h2>

    	<form method="POST" action="cek_login.php">
        	<input type="text" name="username" placeholder="Username" required>

        	<input type="password" name="password" placeholder="Password" required>
	
        		<button type="submit">
					Log In
				</button>

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