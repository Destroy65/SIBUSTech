<?php
    require_once __DIR__."/../model/DBconnect.php";
    include __DIR__."/../model/cart.php";
    include __DIR__."/../model/products.php";
    $conn = DBconnect();
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
        $product_id = $_GET['p'];
        $quantity = $_GET['q'];
        $user_cart = getUserCart($user_id, $conn);
        $product = getProductByID($conn, $product_id)[0];
        if(isset($user_cart[0])){
            $price = $user_cart[0]['price'] + $product['price']*$quantity;
            updateCart($user_id, $price, $conn);
            $cart_id = $user_cart[0]['id'];
        }
        else{
            $price = $product['price'] * $quantity;
            createCart($user_id, $price, $conn);
            $cart_id = getUserCart($user_id, $conn)[0]['id'];
        }
        $price = $product['price'] * $quantity;
        $product_name = $product['name'];
        addCartItem($cart_id, $product_id, $product_name, $quantity, $price, $conn);
        $_SESSION['n_items'] += $quantity;
        $_SESSION['price'] += $price;
    }
    $conn = null;
    include __DIR__."/../view/top_menu.php";
?>