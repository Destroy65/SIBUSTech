<form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
        <span onclick="document.getElementById('log_menu').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="/img/account.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
            
        <button type="submit">Login</button>
        <?php echo "<a href='".$_SERVER['PHP_SELF']."?action=sign_up'><button type='button'>Sign Up</button></a>" ?>
    </div>
</form>