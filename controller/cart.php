<?php
    include __DIR__."/../model/cart.php";

    if(isset($_SESSION['user_id']))
    {
        include __DIR__."/../view/cart.php";
    }

?>
