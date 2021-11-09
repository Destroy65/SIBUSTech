<?php
    require_once __DIR__."/base_url_config.html";
    $action = $_GET['action'] ?? null;
    switch($action){
        default:
            require __DIR__."/resource_main.php";
            break;
    }
?>