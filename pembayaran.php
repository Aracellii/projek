<?php
session_start();
if (isset($_GET['id_menu'], $_GET['nama_menu'], $_GET['harga'])) {
    $id_menu = $_GET['id_menu'];
    $nama_menu = $_GET['nama_menu'];
    $harga = $_GET['harga'];

    echo "<h1>Pembayaran</h1>";
    echo "<p>Menu: $nama_menu</p>";
    echo "<p>Harga: Rp $harga</p>";
    ?>
    <form action="proses_pembayaran.php" method="POST">
        <input type="hidden" name="id_menu" value="<?php echo $id_menu; ?>">
        <input type="hidden" name="nama_menu" value="<?php echo $nama_menu; ?>">
        <input type="hidden" name="harga" value="<?php echo $harga; ?>">

        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah" min="1" value="1">
        <button type="submit">Bayar</button>
    </form>
    <?php
} else {
    echo "Data tidak ditemukan.";
}
?>
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
            <h1>PEMESANAN</h1>
            <div class="form-bayar">
                <H1>PESANAN ATAS NAMA USERNAMES</H1>
                <div>
                <select class="form-bayar-input" name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">AYAM BAKAR PEDAS  </option>
                    <option value="audi">Audi</option>
                </select>
                </div>
                <input class="form-bayar-input" type="number" placeholder="jumlah">
                <div>
                <select class="form-bayar-input" name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">es teh tawar ga pake gula</option>
                    <option value="audi">Audi</option>
                </select>
                </div>
                <input class="form-bayar-input" type="number">
                <a href="transaksi.php"><button class="form-bayar-input" type="submit">PESAN SEKARANG</button></a>
            </div>
        </div>
    </div>


</body>
</html>
