<?php
    function addCart($product_id, $product_name, $quantity, $precio)
    {
        if(!isset($_SESSION['cart'][$product_id]))
        {
            $_SESSION['cart'][$product_id] = [$product_name, 1, (float)$precio];
        }
        else
        {
            $_SESSION['cart'][$product_id][1] += (int)$quantity;
        }
    }

    function deleteCart()
    {
        $_SESSION['cart'] = []; 
    }

    function deleteItem($product_id)
    {
        unset($_SESSION['cart'][$product_id]);
    }

    function changeQuantity($product_id, $quantity)
    {
        $_SESSION['cart'][$product_id][0] = $quantity;
    }

    function addCartItem($cart_id, $product_id, $product_name, $quantity, $price, $conn){
        try{
            $add_item = $conn->prepare("INSERT INTO cart_item(cart_id, product_id, product_name, quantity, price) VALUES (:cart_id, :product_id, :product_name, :quantity, :price)");
            $add_item->bindparam(":cart_id", $cart_id);
            $add_item->bindparam(":product_id", $product_id);
            $add_item->bindparam(":product_name", $product_name);
            $add_item->bindparam(":quantity", $quantity);
            $add_item->bindparam(":price", $price);
            $add_item->execute();
        }
        catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }

    function buy($user_id, $price, $datetime, $conn){
        try{
            $buy_cart = $conn->prepare("INSERT INTO cart(user_id, price, Date, finished) VALUES (:user_id, :price, :datetime, 0)");
            $buy_cart->bindparam(":user_id", $user_id);
            $buy_cart->bindparam(":price", $price);
            $buy_cart->bindparam(":datetime", $datetime);
            $buy_cart->execute();
        }
        catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }

    function getUserCart($user_id, $conn){
        try{
            $consult_cart = $conn->prepare("SELECT id, price, date FROM cart WHERE user_id = :user_id AND finished = 0");
            $consult_cart->bindparam(":user_id", $user_id);
            $consult_cart->execute();
            $user_cart = $consult_cart->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
        return ($user_cart);
    }

    function finishBuy($cart_id, $conn){
        try{
            $buy_cart = $conn->prepare("UPDATE cart SET finished = 1 WHERE id = :cart_id");
            $buy_cart->bindparam(":cart_id", $cart_id);
            $buy_cart->execute();
        }
        catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }
?>