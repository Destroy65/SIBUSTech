<?php
    function getUserCommands($user_id, $conn){
        try{
            $consult_command = $conn->prepare("SELECT id, price, Date FROM cart WHERE user_id = :user_id AND finished = 1");
            $consult_command->bindparam(":user_id", $user_id);
            $consult_command->execute();
            $user_commands = $consult_command->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
        return ($user_commands);
    }

    function getCommandItems($cart_id, $conn){
        try{
            $consult_item = $conn->prepare("SELECT product_id, product_name, quantity, price FROM cart_item WHERE cart_id = :cart_id");
            $consult_item->bindparam(":cart_id", $cart_id);
            $consult_item->execute();
            $command_items = $consult_item->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
        return ($command_items);
    }
?>