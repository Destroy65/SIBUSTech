<?php
    function verify_psw($psw, $expected)
    {
        $hashed = password_hash($psw, PASSWORD_DEFAULT);
        return $hashed == $expected;
    }
    function TODO()
    {
        echo "TODO";


    }
    function login($conn)
    {
        $username = $_POST['username'];
        $psw = $_POST['psw'];
        $consulta = $conn->prepare("SELECT password FROM users WHERE username = :username");
        $consulta->bindParam(":username", $username);
        $result = $consulta->execute();
       
        if($result != false && $verify_psw($psw, $consulta) == true)
        {
            TODO();
        }
        else
        {
            echo "bad pasword or email";
        }
        $consulta->exit();
    }
?>
