<?php
    echo "<a href=".$_SERVER['PHP_SELF']."?action=account><img src='/../img/account.png'  alt='account' width=100px'></a>";
    echo "<a href=".$_SERVER['PHP_SELF']."?action=cart><img src='/../img/cart.png'  alt='account' width=100px'></a>";
    echo $_SESSION['n_items']." items\n".$_SESSION['price']."$";
    echo "<a href=".$_SERVER['PHP_SELF']."?action=log_out><img src='/../img/log_out.png'  alt='account' width=100px'></a>";
?>