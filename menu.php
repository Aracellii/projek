<?php include 'tampil.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(!($_SESSION['login'])) {
    header("Location: login.php?pesan=andabelumlogin");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--header--> 
<body>
    <!-- Header -->
     <div class="header">
        <div class="nav-container">
            <div class="nav">
                <div class="nav-brand">
                    <h1><a href="">Food<span>Stall</span></a></h1>
                </div>
                <div class="nav-menu">
                    <a href="main.php">Home</a>
                    <a href="">About</a>
                    <a href="">Daily Market</a>
                    <a href="">Catalog</a>
                </div>
            </div>
        </div>
     </div>
    <!--End Header-->
<div class="food">
    <h2>MENU MAKANAN</h2>
        <div class="container">
            <div class="row">
                <?php if($_SESSION['role']==="admin"){?>
                <div class="col3">
                    <div class="food-card">
                        <div class="add-menu">
                        <H3>Add Menu:</H3>
                        <a href="tambah.php"> <img src="gambar/plus.png" alt=""> </a>
                    </div>
                    </div>
                    </div>
                     <?php } ?>
                   
                     <?php if($_SESSION['role']==="user"){?>
                <div class="col3">
                    <div class="food-card">
                        <div class="add-menu">
                        <H3>BUY</H3>
                        <a href="pembayaran.php"> <img src="gambar/plus.png" alt=""> </a>
                    </div>
                    </div>
                    </div>
                     <?php } ?>


            <?php while ($product = mysqli_fetch_assoc($result)): 
                 $gambar    = $product['gambar']; 
                 $namamenu  = $product["nama_menu"];
                 $deskripsi = $product["deskripsi"];
                 $harga     = $product["harga"];
                 $id        = $product["id_menu"];?>
                <div class="col3">
                    <div class="food-card">
                        <div class="fc-image">
                        <img src="gambar/<?php echo $gambar; ?>" alt="<?php echo $namamenu; ?>"><br><br></div>
                        <div class="fc-desc">
                        <h3><?php echo  $namamenu . "<br>"; ?></h3>
                        <p><?php echo  $deskripsi ; ?></p>
                        </div>
                        <div class="fc-price">
                        <div class="price-tag">Price :</div>
                        <div class="price-num">Rp   <?php echo  $harga . "<br>"?> </div>
                    </div>
                    <?php if($_SESSION['role']==="admin"){ ?>
                    <div>
                    <button class="btn-menu"><a href="hapus.php">Hapus</a></button>
                    <button class="btn-menu"><a href="edit_menu.php">Edit</a></button><?php }?>
                    <button><a href="pembayaran.php"> <img src="gambar/buy.png" alt=""></a></button>
                    </div>
                    </div>
                </div>
            <?php endwhile ?>
         </div>
    </div>
</div>
<div class="food">
    <h2>MENU MINUMAN</h2>
        <div class="container">
            <div class="row">
            
            
            <?php while ($product = mysqli_fetch_assoc($hasil)):
                $gambar    = $product['gambar']; 
                $namamenu  = $product["nama_menu"];
                $deskripsi = $product["deskripsi"];
                $harga     = $product["harga"];
                $id        = $product["id_menu"];?> ?>
                <div class="col3">
                    <div class="food-card">
                        <div class="fc-image">
                         <img src="gambar/<?php echo $product['gambar']; ?>" alt="<?php echo $product['nama_menu']; ?>"><br><br>
                        </div>
                        <div class="fc-desc">
                        <h3><?php echo $product["nama_menu"] . "<br>"; ?></h3>
                        <p><?php echo  $product["deskripsi"] ;?></p>
                        </div>
                        <div class="fc-price">
                        <div class="price-tag">Start from</div>
                        <div class="price-num"><?php echo  $product["harga"] . "<br>"?> </div>
                        </div>
                        <div>
                        <button class="btn-menu"><a href="hapus.php">Hapus</a></button> 
                        <button class="btn-menu"><a href="edit_menu.php">Edit</a> </button>
                        <button><a href="pembayaran.php"> <img src="gambar/buy.png" alt=""></a></button>
                        </div>
                        
                    </div>
                </div>
            <?php endwhile ?>
         </div>
    </div>
</div>

</body>
</html>
<?php 
?>