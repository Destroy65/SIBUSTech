<?php
    require_once __DIR__."/../model/DBconnect.php";
    include __DIR__."/../model/cart.php";
    include __DIR__."/../model/products.php";
    
    $conn = DBconnect();

    $product_id = $_GET['p'];
    $quantity = $_GET['q'];
   
    $aux = getProductByID($conn, $product_id)[0];
    addCart($product_id, $aux['name'],  $quantity, $aux['price']);
    
    include __DIR__."/../view/top_menu.php";

    $conn = null; 
?>