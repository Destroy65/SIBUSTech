<header id="mainLogo" style="grid-area: mainLogo">
    <a href="<?php $_SERVER['PHP_SELF']?>?action=main" target="_self"><img id="logo" src="/../img/test_logo.png" alt="test_logo" width="100px"></a> 
</header>
<nav id="topnav" style="grid-area: topnav">
    <input type="text" id="nav" placeholder="Search.." />
</nav>
<section id="profile" style="grid-area: profile">
<?php if($_SESSION['logged'] == true){
        echo "<button id='a_button'>Account</button>";
        echo "<div id='a_menu' style='display: none'>";
        include __DIR__."/top_menu_profile.php";
        echo "</div>";
    }
    if ($_SESSION['logged'] == false && $_GET['action'] != 'sign_up'):?>
         <button onclick="document.getElementById('log_menu').style.display='block'" style="width:auto;">Login</button>
<?php endif?>
</section>
