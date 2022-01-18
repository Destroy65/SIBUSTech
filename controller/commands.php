<?php
    require_once __DIR__."/../model/DBconnect.php";
    include __DIR__."/../model/commands.php";
    $conn = DBconnect();
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
        $user_commands = getUserCommands($user_id, $conn);
        $command_items = array();
        foreach($user_commands as $uc){
            array_push($command_items, getCommandItems($uc['id'], $conn));
        }
        include __DIR__."/../view/commands.php";
    }
    $conn = null;
?>