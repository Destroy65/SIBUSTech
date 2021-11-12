<form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
        <span onclick="document.getElementById('log_menu').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="/img/account.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
            
        <button type="submit">Login</button>
        <?php echo "<a href='".$_SERVER['PHP_SELF']."?action=sign_up'><button type='button'>Sign Up</button></a>" ?>
    </div>
</form>