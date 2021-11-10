<header id="mainLogo" style="grid-area: mainLogo">
    <a href="<?php $_SERVER['PHP_SELF']?>?action=0" target="_self"><img src="/../img/test_logo.png" alt="test_logo" width="100px"></a> 
</header>
<nav id="topnav" style="grid-area: topnav">
    <input type="text" placeholder="Search..">
</nav>
<section id="profile" style="grid-area: profile">
    <?php if($logged == true){
        echo "<a href=".$_SERVER['PHP_SELF']."?action=account><img src='/../img/account.png'  alt='account' width=100px'></a>";
        echo "<a href=".$_SERVER['PHP_SELF']."?action=cart><img src='/../img/cart.png'  alt='account' width=100px'></a>";
    }else{
        echo "Log In";
    }
    ?>
</section>
