<?php
    echo "<a href=".$_SERVER['PHP_SELF']."?action=account><img src='".$_SESSION['user_img']."'  alt='account' width=100px'></a>";
    echo "<a href=".$_SERVER['PHP_SELF']."?action=cart><img src='/../img/cart.png'  alt='account' width=100px'></a>";
    $n_items = 0; 
    $price = 0; 
    foreach($_SESSION['cart'] as $val)
    {
        $n_items += $val[1];
        $price += $val[2]*$val[1];
    }
    echo $n_items." items\n".$price."$";
    echo "<a href=".$_SERVER['PHP_SELF']."?action=log_out><img src='/../img/log_out.png'  alt='account' width=100px'></a>";
?>