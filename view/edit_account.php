<hmtl>
    <form action="" method="post">
        <div class="edit_account">
            <label for="name"><b>Nombre</b></label>
            <input type="text" placeholder=<?php echo htmlentities($user_data[0]['name'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ?> pattern="^[^ ][\w.ñÑ ]*" name="name">
            
            <label for="surname"><b>Apellidos</b></label>
            <input type="text" placeholder=<?php echo htmlentities($user_data[0]['surname'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ?> pattern="^[^ ][\w.ñÑ ]*" name="surname">
            
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="" id="s_psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">

            <label for="address"><b>Direccion</b></label>
            <input type="text" placeholder=<?php echo htmlentities($user_data[0]['address'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ?> maxlength="30" name="address">
            
            <label for="phone"><b>Phone</b></label>
            <input type="phone" placeholder=<?php echo $user_data[0]['phone'] ?> id="phone" name="phone" pattern="[0-9]{9}">
            
            <label for="city"><b>Poblacion</b></label>
            <input type="text" placeholder=<?php echo htmlentities($user_data[0]['city'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ?> maxlength="30" name="city">

            <label for="postal"><b>Codigo Postal</b></label>
            <input type="text" placeholder=<?php echo $user_data[0]['postal_code']?> name="postal" pattern="((0[1-9]|5[0-2])|[1-4][0-9])[0-9]{3}" id="postal">

            <label for="country"><b>Pais</b></label>
            <input type="text" placeholder=<?php echo htmlentities($user_data[0]['country'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ?> maxlength="30" name="country">

            <button type="submit" class="signupbtn">Submit</button>
        </div>
    </form>
</html>
