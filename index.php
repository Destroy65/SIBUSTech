<?php
    session_start();
    $_GET['action'] = $_GET['action'] ?? 'main';
    $_GET['q'] = $_GET['q'] ?? 1;
    $_GET['p'] = $_GET['p'] ?? null;
    $_SESSION['logged'] = $_SESSION['logged'] ?? false;
    switch($_GET['action']){
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