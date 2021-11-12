<hmtl>
    <form action="" method="post">
        <div class="sign_up">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            
            <label for="name"><b>Nombre</b></label>
            <input type="text" placeholder="Enter Nombre" name="name" required>
            
            <label for="surname"><b>Apellidos</b></label>
            <input type="text" placeholder="Enter Apellidos" name="surname" required>
            
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
            
            <label for="username"><b>Nombre de Usuario</b></label>
            <input type="text" placeholder="Enter username" name="username" required>
            
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="adress"><b>Direccion</b></label>
            <input type="text" placeholder="" name="adress" required>
            
            <label for="city"><b>Poblacion</b></label>
            <input type="text" placeholder="Poblacion" name="city" required>

            <label for="postal"><b>Codigo Postal</b></label>
            <input type="number" placeholder="Codigo Postal" name="postal" required>
        
            <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>

            <div class="clearfix">
            <?php echo "<a href='".$_SERVER['PHP_SELF']."'><button type='button' class='cancelbtn'>Cancel</button></a>"; ?>
            <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>
</html>
