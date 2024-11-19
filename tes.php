<?php

session_start();
if (isset($_SESSION['login'])) {
    echo "belum login";
}
echo "hai";
?>
