<?php
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
    function getCartItems($cart_id, $conn){
        try{
            $consult_item = $conn->prepare("SELECT id, product_id, product_name, quantity, price FROM cart_item WHERE cart_id = :cart_id");
            $consult_item->bindparam(":cart_id", $cart_id);
            $consult_item->execute();
            $cart_items = $consult_item->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
        return ($cart_items);
    }
    function getCartItemID($id, $conn){
        try{
            $consult_item = $conn->prepare("SELECT quantity, price FROM cart_item WHERE id = :id");
            $consult_item->bindparam(":id", $id);
            $consult_item->execute();
            $cart_item = $consult_item->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
        return ($cart_item);
    }
    function updateCart($user_id, $price, $conn){
        try{
            $update_cart = $conn->prepare("UPDATE cart SET price = :price WHERE user_id = :user_id AND finished = 0");
            $update_cart->bindparam(":user_id", $user_id);
            $update_cart->bindparam(":price", $price);
            $update_cart->execute();
        }
        catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }
    function createCart($user_id, $price, $conn){
        try{
            $create_cart = $conn->prepare("INSERT INTO cart(user_id, price, finished) VALUES (:user_id, :price, 0)");
            $create_cart->bindparam(":user_id", $user_id);
            $create_cart->bindparam(":price", $price);
            $create_cart->execute();
        }
        catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
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
    function deleteCart($user_id, $conn){
        try{
            $delete_cart = $conn->prepare("DELETE FROM cart WHERE user_id = :user_id AND finished = 0");
            $delete_cart->bindparam(":user_id", $user_id);
            $delete_cart->execute();
        }
        catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }
    function buy($user_id, $datetime, $conn){
        try{
            $buy_cart = $conn->prepare("UPDATE cart SET finished = 1, date = :datetime WHERE user_id = :user_id AND finished = 0");
            $buy_cart->bindparam(":user_id", $user_id);
            $buy_cart->bindparam(":datetime", $datetime);
            $buy_cart->execute();
        }
        catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }
    function deleteItem($id, $conn){
        try{
            $delete_cart = $conn->prepare("DELETE FROM cart_item WHERE id = :id");
            $delete_cart->bindparam(":id", $id);
            $delete_cart->execute();
        }
        catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }
?>