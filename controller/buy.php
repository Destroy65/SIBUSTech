<?php
    require_once __DIR__."/../model/DBconnect.php";
    include __DIR__."/../model/cart.php";
    $conn = DBconnect();
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
        $user_cart = getUserCart($user_id, $conn);
        if(isset($user_cart[0])){
            $cart_items = getCartItems($user_cart[0]['id'], $conn);
        }
        $datetime = date("Y-m-d H:i:s");
        buy($user_id, $datetime, $conn);
        $_SESSION['price'] = 0;
        $_SESSION['n_items'] = 0;
        include __DIR__."/../view/buy.php";
    }
    $conn = null;
?>