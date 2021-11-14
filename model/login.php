<?php

    function login($conn)
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $psw = $_POST['psw'];
            $consulta = $conn->prepare("SELECT id, password FROM users WHERE username = :username");
            $consulta->bindParam(":username", $username);
            $consulta->execute();
            $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
            if(password_verify($psw, $result[0]['password']))
            {
                $_SESSION['user_id'] = $result[0]['id'];
                $_SESSION['username'] = $username;
                return false;
            }
            else
            {
                return true;
            }
        }
        return true;
    }
?>
