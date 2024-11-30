<?php 
include 'db.php'; // Ensure this is included first for database connection
include 'tampil.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['login']) || !$_SESSION['login']) {
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
    <!-- Header -->
    <div class="header">
        <div class="nav-container">
            <div class="nav">
                <div class="nav-brand">
                    <h1><a href="">Makanan<span>Ku</span></a></h1>
                </div>
                <div class="nav-menu">
                    <a href="main.php">Home</a>
                    <a href="">Catalog</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <div class="food">
        <h2>MENU MAKANAN</h2>
        <div class="container">
            <div class="row">
                <?php if ($_SESSION['role'] === "admin") { ?>
                    <div class="col3">
                        <div class="food-card">
                            <div class="add-menu">
                                <h3>Add Menu:</h3>
                                <a href="tambah.php"><img src="icon/plus.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php while ($product = mysqli_fetch_assoc($result)): 
                    $gambar = $product['gambar']; 
                    $namamenu = $product["nama_menu"];
                    $deskripsi = $product["deskripsi"];
                    $harga = $product["harga"];
                    $id = $product["id_menu"]; ?>
                    <div class="col3">
                        <div class="food-card">
                            <div class="fc-image">
                                <img src="gambar/<?php echo $gambar; ?>" alt="<?php echo $namamenu; ?>"><br><br>
                            </div>
                            <div class="fc-desc">
                                <h3><?php echo $namamenu . "<br>"; ?></h3>
                                <p><?php echo $deskripsi; ?></p>
                            </div>
                            <div class="fc-price">
                                <div class="price-tag">Price :</div>
                                <div class="price-num">Rp <?php echo $harga . "<br>"; ?></div>
                            </div>
                            <div>
                                <?php if ($_SESSION['role'] === "admin") { ?>
                                    <form method="POST" action="hapus.php" style="display:inline;">
                                        <input type="hidden" name="id_menu" value="<?php echo $id; ?>">
                                        <button type="submit" class="btn-menu">Hapus</button>
                                    </form>
                                    <button class="btn-menu"><a href="edit_menu.php?id_menu=<?php echo $id; ?>">Edit</a></button>
                                <?php } ?>
                                <?php if ($_SESSION['role'] === "user") { ?>
                                    <button class="btn-menu"><a href="pembayaran.php?id_menu=<?php echo $id; ?>&nama_menu=<?php echo $namamenu; ?>&harga=<?php echo $harga; ?>"><img src="icon/buy.png" alt="Beli"></a></button>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

    <div class="food">
        <h2>MENU MINUMAN</h2>
        <div class="container">
            <div class="row">
                <?php while ($product = mysqli_fetch_assoc($hasil)):
                    $gambar = $product['gambar']; 
                    $namamenu = $product["nama_menu"];
                    $deskripsi = $product["deskripsi"];
                    $harga = $product["harga"];
                    $id = $product["id_menu"]; ?>
                    <div class="col3">
                        <div class="food-card">
                            <div class="fc-image">
                                <img src="gambar/<?php echo $gambar; ?>" alt="<?php echo $namamenu; ?>"><br><br>
                            </div>
                            <div class="fc-desc">
                                <h3><?php echo $namamenu . "<br>"; ?></h3>
                                <p><?php echo $deskripsi; ?></p>
                            </div>
                            <div class="fc-price">
                                <div class="price-tag">Start from</div>
                                <div class="price-num">Rp <?php echo $harga . "<br>"; ?></div>
                            </div>
                            <div>
                                <?php if ($_SESSION['role'] === "admin") { ?>
                                    <form method="POST" action="hapus.php" style="display:inline;">
                                        <input type="hidden" name="id_menu" value="<?php echo $id; ?>">
                                        <button type="submit" class="btn-menu">Hapus</button>
                                    </form>
                                    <button class="btn-menu"><a href="edit_menu.php?id_menu=<?php echo $id; ?>">Edit</a></button>
                                <?php } ?>
                                <?php if ($_SESSION['role'] === "user") { ?>
                                    <button class="btn-menu"><a href="pembayaran.php?id_menu=<?php echo $id; ?>&nama_menu=<?php echo $namamenu; ?>&harga=<?php echo $harga; ?>"><img src="icon/buy.png" alt="Beli"></a></button>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</body>
</html>