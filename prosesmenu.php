<?php
    $query = new mysqli('localhost', 'root', '', 'projek');
    $namamenu = $_POST['namamenu'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];
    $namafile = $_FILES['gambar']['name'];
    $deskripsi = $_POST['deskripsi'];
    echo "Nama file yang di-upload: " . $namafile;
    $tempat = $_SERVER['DOCUMENT_ROOT'] . "/projek/gambar/"; 
    $simpan = $tempat . $namafile;
    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $simpan)) {
        echo "<br>File berhasil diunggah ke direktori: " . $simpan;
    }
    $data = $query->query("INSERT INTO menu (nama_menu, jenis_menu, deskripsi,harga,gambar) VALUES ('$namamenu', '$kategori', '$deskripsi', '$harga', '$namafile');");
    
?>