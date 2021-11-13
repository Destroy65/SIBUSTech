<?php
    require_once __DIR__."/base_url_config.html";
    $action = $_GET['action'] ?? null;
    $logged = $_GET['logged'] ?? null;
    switch($action){
        case 'sign_up':
            require __DIR__."/resource_sign_up.php";
            break;
        case 'account':
            require __DIR__."/resource_account.php";
            break;
        case 'cart':
            require __DIR__."/resource_cart.php";
            break;
        default:
            require __DIR__."/resource_main.php";
            break;
    } 
?>