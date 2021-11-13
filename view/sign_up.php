<hmtl>
<div id="error">
    <?php if($err == true){
        echo "<p>Ya existe una cuenta con este correo electrónico y/o nombre de usuario</p>";
    }?>
</div>
<form action="" onsubmit="return validateForm();" method="post">
        <div class="sign_up">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            
            <label for="name"><b>Nombre</b></label>
            <input type="text" placeholder="Enter Nombre" name="name" required>
            
            <label for="surname"><b>Apellidos</b></label>
            <input type="text" placeholder="Enter Apellidos" name="surname" required>
            
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="s_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
            
            <label for="username"><b>Nombre de Usuario</b></label>
            <input type="text" placeholder="Enter username" name="username" required>
            
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" id="s_psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>

            <label for="address"><b>Direccion</b></label>
            <input type="text" placeholder="" name="address" required>
            
            <label for="city"><b>Poblacion</b></label>
            <input type="text" placeholder="Poblacion" name="city" required>

            <label for="postal"><b>Codigo Postal</b></label>
            <input type="text" placeholder="Codigo Postal" name="postal" pattern="((0[1-9]|5[0-2])|[1-4][0-9])[0-9]{3}" id="postal" required>

            <label for="country"><b>Pais</b></label>
            <input type="text" placeholder="Pais" name="country" required>

            <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>

            <div class="clearfix">
            <button type='button' class='cancelbtn'>Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>
    <div id="warn">
    </div>
</html>
