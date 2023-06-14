<?php
session_start();

if (isset($_SESSION['cart'])) {
    $items_array_id = array_column($_SESSION['cart'], "id");

    if (!in_array($_POST['id'], $_SESSION['cart'])) {
        $items_array = array(
            'id'=>$_POST['id'],
            'name'=>$_POST['name'],
            'price'=>$_POST['price'],
            'quantity'=>$_POST['quantity']   
        );
        $_SESSION['cart'][] = $items_array;
    }
}
else {
    $items_array = array(
        'id'=>$_POST['id'],
        'name'=>$_POST['name'],
        'price'=>$_POST['price'],
        'quantity'=>$_POST['quantity']   
    );
    $_SESSION['cart'][] = $items_array;
}

?> 