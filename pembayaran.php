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
