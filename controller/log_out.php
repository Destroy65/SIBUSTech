<?php
    if(isset($_SESSION['user_id'])){
        unset($_SESSION['user_id']);
        unset($_SESSION['cart']);
        unset($_SESSION['cart_items']);
        unset($_SESSION['n_items']);
        $_SESSION['user_img'] = "/img/account.png";
    }
    $_SESSION['logged'] = false;
    header("Location: ".$_SERVER['PHP_SELF']."?action=0");
?>