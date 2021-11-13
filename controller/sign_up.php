<?php
    require_once __DIR__."/../model/DBconnect.php";
    require __DIR__."/../model/sign_up.php";
    $conn = DBconnect();
    $err = sign_up($conn);
    if(!$err){
        $conn = null;
        header("Location: ".$_SERVER['PHP_SELF']."?action=0&logged=true");
        exit();
    }
    include_once __DIR__."/../view/sign_up.php";
?>