<?php
    
    include __DIR__."/../model/cart.php";
    if(isset($_SESSION['cart'])){
        
        $product_id = $_GET['p'];
        
        deleteItem($product_id);
        include_once __DIR__."/../view/cart.php";
        echo "~";
        include_once __DIR__."/../view/top_menu_profile.php";
    }
?>