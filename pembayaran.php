<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <div class="container">
        <div class="pembayaran">
            <br>
            <div class="form-bayar">
            <H1>PESANAN ATAS NAMA <?php echo $_SESSION['username'];?></H1>
            <?php
            if (isset($_GET['id_menu'], $_GET['nama_menu'], $_GET['harga'])) {
                $id_menu = $_GET['id_menu'];
                $nama_menu = $_GET['nama_menu'];
                $harga = $_GET['harga'];
                ?>
                <table >
                <tr>
                <td>Makananmu</td>
                <td>:</td>
                <td><?php echo $nama_menu; ?></td>
                </tr>
                <tr>
                <td>Harga Satuan</td>
                <td>:</td>
                <td><?php echo $harga; ?></td>
                </tr>
                </table>
                
                <form action="transaksi.php" method="POST">
                    <input type="hidden" name="id_menu" value="<?php echo $id_menu; ?>">
                    <input type="hidden" name="nama_menu" value="<?php echo $nama_menu; ?>">
                    <input type="hidden" name="harga" value="<?php echo $harga; ?>">
                    <label  for="jumlah">Jumlah:</label>
                    <input class="form-bayar-input" type="number" id="jumlah" name="jumlah" min="1" value="1">
                    <a href="transaksi.php"><button class="form-bayar-input" type="submit">PESAN SEKARANG</button></a>
                </form>
                <?php
                ?>

                
            </div>
        </div>
    </div>


</body>
</html>
<?php }
?>