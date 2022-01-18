<?php
    require_once __DIR__."/../model/DBconnect.php";
    include __DIR__."/../model/cart.php";
    $conn = DBconnect();
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
        $id = $_GET['p'];
        $cart_item = getCartItemID($id, $conn)[0];
        $quantity = $cart_item['quantity'];
        $price = $cart_item['price'];
        updateCart($user_id, ($_SESSION['price']-$price), $conn);
        deleteItem($id, $conn);
        $_SESSION['price'] -= $price;
        $_SESSION['n_items'] -= $quantity;
        $user_cart = getUserCart($user_id, $conn);
        if(isset($user_cart[0])){
            $cart_items = getCartItems($user_cart[0]['id'], $conn);
        }
        include_once __DIR__."/../view/cart.php";
        echo "~";
        include_once __DIR__."/../view/top_menu_profile.php";
    }
    $conn = null;
?>