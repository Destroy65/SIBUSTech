<?php
    include __DIR__."/../model/cart.php";
    if(isset($_SESSION['cart'])){
        deleteCart();
        include __DIR__."/../view/top_menu_profile.php";
    }
?>