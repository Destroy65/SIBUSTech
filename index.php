<?php
    session_start();
    $_GET['action'] = $_GET['action'] ?? 'main';
    $_GET['p'] = $_GET['p'] ?? null;
    $_GET['q'] = $_GET['q'] ?? 0;
    $_SESSION['logged'] = $_SESSION['logged'] ?? false;
    $_SESSION['n_items'] = $_SESSION['n_items'] ?? 0;
    $_SESSION['price'] = $_SESSION['price'] ?? 0;
    switch($_GET['action']){
        case 'sign_up':
            require __DIR__."/resource_sign_up.php";
            break;
        case 'account':
            require __DIR__."/resource_account.php";
            break;
        case 'edit_account':
            require __DIR__."/resource_edit_account.php";
            break;
        case 'cart':
            require __DIR__."/resource_cart.php";
            break;
        case 'log_out':
            require __DIR__."/controller/log_out.php";
            break;
        case 'addCart':
            require __DIR__."/controller/addCart.php";
            break;
        case 'deleteCart':
            require __DIR__."/controller/deleteCart.php";
            break;
        case 'deleteItem':
            require __DIR__."/controller/deleteItem.php";
            break;
        case 'buy':
            require __DIR__."/resource_buy.php";
            break;
        case 'category':
            require __DIR__."/controller/products.php";
            break;
        case 'product':
            require __DIR__."/controller/detailProduct.php";
            break;
        default:
            require __DIR__."/resource_main.php";
            break;
    } 
?>