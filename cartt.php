<?php
session_start();

require_once __DIR__ . "/includes/navbar copy.php";

if (isset($_SESSION['cart'])) {
    var_dump($_SESSION['cart']);
}

?>