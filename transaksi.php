<?php
session_start();
if (isset($_POST['id_menu'], $_POST['nama_menu'], $_POST['harga'])) {
    $id_menu = $_POST['id_menu'];
    $nama_menu = $_POST['nama_menu'];
    $harga = $_POST['harga'];
    // Menghitung total harga (anggap total yang dimaksud adalah harga yang langsung diterima)
    $total = $harga;
    // Koneksi ke database
    $query = new mysqli('localhost', 'root', '', 'projek');
    // Cek koneksi
    if ($query->connect_error) {
        die("Koneksi gagal: " . $query->connect_error);
    }
    // Menyimpan data pembayaran ke dalam tabel 'pembayaran'
    $sql = "INSERT INTO pembayaran (id_menu, nama_menu, harga,id_user) 
            VALUES ('$id_menu', '$nama_menu', '$harga',  '{$_SESSION['id']}')";

    if ($query->query($sql) === TRUE) {
        echo "<h1>Detail Pembayaran</h1>";
        echo "<p>Menu  : $nama_menu</p>";
        echo "<p>Harga : Rp $harga</p>";
        echo "<p>Total : Rp $total</p>";
        echo "<p>Terima kasih, " . $_SESSION['username'] . ". Pembayaran Anda telah dicatat.</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $query->error;
    }
    // Menutup koneksi
    $query->close();
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Summary</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="transaksi">
    <header>
        <h1>Payment Summary</h1>
        <p>Enjoy your meals!</p>
    </header>
    
        <div class="transaksi-rincian">
        <table >
            <tr>
                <td>Name</td>
                <td>:</td>
                <td>makananmu</td>
            </tr>
            <tr>
                <td>Harga Satuan</td>
                <td>:</td>

                <td>1jt</td>
            </tr>
            <tr>
                <td>Banyak Pesanan</td>
                <td>:</td>
                
                <td>50 pcs</td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td>:</td>
                
                <td>50jt </td>
            </tr>
        </table>
        <a href=""><button class="btn">pesan lagi?</button></a>
        </div>
        </div>
        </div>
</body>
</html>
