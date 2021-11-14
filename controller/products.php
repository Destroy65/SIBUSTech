<?php
    require_once __DIR__."/../model/DBconnect.php";
    include __DIR__."/../model/products.php";
    $conn = DBconnect();
    $aux = load_product($conn);
    include __DIR__."/../view/products.php";
?>