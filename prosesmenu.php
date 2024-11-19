<?php
    include 'cek_login.php';
    $namamenu = $_POST['namamenu'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];
    $namafile = $_FILES['gambar']['name'];
    $deskripsi = $_POST['deskripsi'];
    echo "Nama file yang di-upload: " . $namafile;
    $tempat = $_SERVER['DOCUMENT_ROOT'] . "/projek/gambar/"; 
    $simpan = $tempat . $namafile;
    move_uploaded_file($_FILES['gambar']['tmp_name'], $simpan);
    $data = $conn->query("INSERT INTO menu (nama_menu, jenis_menu, deskripsi,harga,gambar) VALUES ('$namamenu', '$kategori', '$deskripsi', '$harga', '$namafile');");
    header("location:menu.php")
?>