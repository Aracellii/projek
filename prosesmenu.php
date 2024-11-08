<?php
    $query = new mysqli('localhost', 'root', '', 'projek');
    $namamenu = $_POST['namamenu'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];
    $namafile = $_FILES['gambar']['name'];
    $deskripsi = $_POST['deskripsi'];
    $tempat = $_SERVER['DOCUMENT_ROOT'] . "/projek/gambar/"; 
    $simpan = $tempat . $namafile;
    $data = $query->query("INSERT INTO menu (nama_menu, jenis_menu, deskripsi,harga,gambar) VALUES ('$namamenu', '$kategori', '$deskripsi', '$harga', '$namafile');");
    header("location:menu.php")
?>