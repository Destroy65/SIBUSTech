<?php
    require_once __DIR__."/../model/DBconnect.php";
    require __DIR__."/../model/login.php";
    $err = $err ?? true;
    $conn = DBconnect();
    $err = login($conn);
    if(!$err){
        $conn = null;
        $_SESSION['logged'] = true;
        header("Location: ".$_SERVER['PHP_SELF']."?action=0", TRUE, 301);
        exit();
    }

    include __DIR__."/../view/log_menu.php"; 
?>