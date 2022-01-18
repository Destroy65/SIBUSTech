<?php
    require_once __DIR__."/../model/DBconnect.php";
    include __DIR__."/../model/detailProduct.php";
    $conn = DBconnect();
    $aux = detail_product($conn)[0];
    include __DIR__."/../view/template_product.php";
?>