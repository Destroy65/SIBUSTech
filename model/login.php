<?php
    function login($conn, $email, $psw)
    {
        $consulta = $conn->prepare("SELECT id, password FROM users WHERE email = :email");
        $consulta->bindParam(":email", $email);
        $consulta->execute();
        $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
        if(isset($result[0])){ 
            if(password_verify($psw, $result[0]['password']))
            {
                return $result[0]['id'];
            }
        }
        return 0;
    }

    function getUserImg($conn, $user_id)
    {
        $consulta = $conn->prepare("SELECT img FROM users WHERE id = :user_id");
        $consulta->bindParam(":user_id", $user_id);
        $consulta->execute();
        $img = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $img[0]['img'];
    }
?>
