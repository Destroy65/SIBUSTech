<?php
    require_once __DIR__."/../model/DBconnect.php";
    include __DIR__."/../model/account.php";
    $conn = DBconnect();
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
        $user_data = getUserData($user_id, $conn);
        include __DIR__."/../view/account.php";
    }
    $conn = null;
?>