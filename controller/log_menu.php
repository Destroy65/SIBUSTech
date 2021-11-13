<?php
    require_once __DIR__."/../model/DBconnect.php";
    require __DIR__."/../model/login.php";
    $err = $err ?? true;
    $conn = DBconnect();
    $err = login($conn);
    if(!$err){
        $conn = null;
        header("Location: ".$_SERVER['PHP_SELF']."?action=0&logged=true");
        exit();
    }

    include __DIR__."/../view/log_menu.php"; 
?>