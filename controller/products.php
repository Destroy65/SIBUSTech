<?php
    require_once __DIR__."/../model/DBconnect.php";
    include __DIR__."/../model/products.php";
    $conn = DBconnect();
    if(isset($_GET['category'])){
        $categoria = $_GET['category'];
        $products = getProductByCat($conn, $categoria);
        if(!isset($products[0])){
            $products = getProductbyName($conn, $categoria);
        }
    }
    else
        $products = getAllProducts($conn);
    $conn = null;
    
    include __DIR__."/../view/products.php";
?>