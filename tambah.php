
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
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
                    <a href="menu.php">Catalog</a>
                </div>
            </div>
        </div>
     </div>
    <!--End Header-->
    <div class="container-menu">
        <div class="tambah-menu">
        <h1>Tambah Menu</h1>
            <form action="" method="POST">
                <div>
                    <label class="">Nama Menu</label>    
                    <input class="" type="text" placeholder="Nama Menu" name="namamenu" value="">
                </div>
                <div>
                    <label class="">Harga</label>
                    <input class="" type="number" placeholder="Harga" name="" value="">
                </div>
                <label>Masukkan Gambar</label>
                <div>
                    <label for="file-upload" class="custom-file-upload">Pilih Gambar </label>
                    <input id="file-upload"name="gambar" value="" type="file" />
                </div>
                <div>
                    <label class="">Kategori</label>
                        <select id="select" name="kategori" >
                            <option>Makanan</option>
                            <option>Minuman</option>
                        </select>
                </div>
                <div>
                        <label for="" class="form-label"style="">Deskripsi</label>
                        <input class="" type="text" placeholder="Deskripsi"  name="deskripsi" value="">
                </div>
                        <button type="submit" class="btn" style="">Submit</button>
        </form>
        </div>
        </div>
</div>
</body>
</html>