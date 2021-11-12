<?php
    require __DIR__."/../model/DBconnect.php";
    require __DIR__."/../model/categories.php";
    $conn = DBconnect();
    $categories = getCategories($conn);
    $conn = null;
    include __DIR__."/../view/categories.php";
?>