<?php 
include 'db.php';
session_start();
if (isset($_POST['id_menu']) && $_POST['id_menu'] !== '') {
    $id_menu = intval($_POST['id_menu']); 
    $query = "DELETE FROM menu WHERE id_menu = $id_menu";
    if (mysqli_query($conn, $query)) { 
        header('Location: menu.php');
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "id_menu is not set or is empty.";
}
?>