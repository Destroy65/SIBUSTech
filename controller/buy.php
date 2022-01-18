<?php
    require_once __DIR__."/../model/DBconnect.php";
    include __DIR__."/../model/cart.php";
    $conn = DBconnect();
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
        $datetime = date("Y-m-d H:i:s");
        $aux = $_SESSION['cart'];
        $total = 0;
        foreach($aux as $ky=>$ci){
            $total += $ci[1] * $ci[2];
        }
        buy($user_id, $total, $datetime, $conn);
        $cart_id = getUserCart($user_id, $conn)[0]['id'];
        foreach($aux as $ky=>$ci){
            $product_id = $ky;
            $product_name = $ci[0];
            $quantity = $ci[1];
            $price = $ci[2];
            addCartItem($cart_id, $product_id, $product_name, $quantity, $price, $conn);
        }
        finishBuy($cart_id, $conn);
        include __DIR__."/../view/buy.php";
        deleteCart();
    }
    $conn = null;
?>