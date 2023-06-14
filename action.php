<?php
session_start();

if (isset($_POST['action'])) {
    if ($_POST['action'] == 'clear') {
        unset($_SESSION['cart']);
    }

    // remove button
    if ($_POST['action'] == "remove") {
        if ($value['id'] == $_POST['id']) {
            unset($_SESSION['cart'][$key]);
        }
    }
}

?>