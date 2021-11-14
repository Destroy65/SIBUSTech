<?php
    require_once __DIR__."/../model/DBconnect.php";
    require __DIR__."/../model/sign_up.php";
    $conn = DBconnect();
    $err = sign_up($conn);
    if($err == 'p'){
        $conn = null;
        $_SESSION['logged'] = true;
        header("Location: ".$_SERVER['PHP_SELF']."?action=0", TRUE, 301);
        exit();
    }
    include_once __DIR__."/../view/sign_up.php";
?>