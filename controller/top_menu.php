<?php
    if($_GET['action'] == 'log_out'){
        $_SESSION['logged'] = false;
        $_SESSION['user_id'] = null;
        $_SESSION['username'] = null;
    }
    include __DIR__."/../view/top_menu.php";
?>