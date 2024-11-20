    <?php
    session_start();
    include 'menu.php';
    include 'db.php';
    $qhapus = "DELETE FROM menu WHERE id_menu = $id";
    $qhapusp = "DELETE FROM pembayaran WHERE id_menu = $id";
    $hapusp=mysqli_query($conn,$qhapusp);
    $hasil = mysqli_query($conn, $qhapus);
    header("location: menu.php");
    ?>
