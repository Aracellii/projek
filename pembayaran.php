<?php 
include 'prosespesan.php';
include 'cek_login.php';


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
                <select class="form-bayar-input" name="pesanmakan" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">AYAM BAKAR PEDAS  </option>
                    <option value="audi">Audi</option>
                </select>
                </div>
                <input class="form-bayar-input" type="number" placeholder="jumlah">
                <div>
                <select class="form-bayar-input" name="pesanminum" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">es teh tawar ga pake gula</option>
                    <option value="audi">Audi</option>
                </select>
                </div>
                <input class="form-bayar-input" type="number">
                <button class="form-bayar-input" type="submit">PESAN SEKARANG</button>
            </div>
        </div>
    </div>


</body>
</html>