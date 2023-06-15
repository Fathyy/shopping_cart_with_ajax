<?php
// if session is set
if (isset($_SESSION['cart'])) {
    $items_array_id = array_column($_SESSION['cart'], "id");

    if (!in_array($_POST['id'], $items_array_id)) {
        $items_array = array(
            'id'=>$_POST['id'],
            'name'=>$_POST['name'],
            'price'=>$_POST['price'],
            'quantity'=>$_POST['quantity'],
        );
        $_SESSION['cart'][] = $items_array;
    }
}
// else the session is not set
else{
    $items_array = array(
        'id'=>$_POST['id'],
        'name'=>$_POST['name'],
        'price'=>$_POST['price'],
        'quantity'=>$_POST['quantity'],
    );
    $_SESSION['cart'][] = $items_array;
}
?>