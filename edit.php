<?php
    include 'db.php';
    $namamenu = $_POST['namamenu'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];
    $namafile = $_FILES['gambar']['name'];
    $deskripsi = $_POST['deskripsi'];
    echo "Nama file yang di-upload: " . $namafile;
    $tempat = $_SERVER['DOCUMENT_ROOT'] . "/projek/gambar/"; 
    $simpan = $tempat . $namafile;
    move_uploaded_file($_FILES['gambar']['tmp_name'], $simpan);
    $data = $conn->query("UPDATE menu 
    SET nama_menu = '$namamenu', 
        jenis_menu = '$kategori', 
        deskripsi = '$deskripsi', 
        harga = '$harga', 
        gambar = '$namafile' 
    WHERE id_menu = '$id_menu';");
header("location:menu.php")
?>