<?php
    require_once __DIR__."/../model/DBconnect.php";
    include __DIR__."/../model/cart.php";
    $conn = DBconnect();
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
        deleteCart($user_id, $conn);
        $_SESSION['price'] = 0;
        $_SESSION['n_items'] = 0;
        include_once __DIR__."/../view/top_menu_profile.php";
    }
    $conn = null;
?>