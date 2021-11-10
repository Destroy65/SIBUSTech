<?php
    require_once __DIR__."/../model/DBconnect.php";
    include_once __DIR__."/../model/sign_up.php";
    $conn = DBconnect();
    sign_up($conn);
?>