<?php
    function getUserData($user_id, $conn){
        try{
            $consult_user = $conn->prepare("SELECT name, surname, email, phone, address, postal_code, city, country FROM users WHERE id = :user_id");
            $consult_user->bindparam(":user_id", $user_id);
            $consult_user->execute();
            $user_data = $consult_user->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
        return ($user_data);
    }

    function editUserData($user_id, $conn, $name, $surname, $password, $phone, $address, $postal_code, $city, $country)
    {
        try{
            if($name != null){
                $consulta = $conn->prepare("UPDATE users SET name=:name WHERE id = :user_id");
                $consulta->bindparam(":user_id", $user_id);
                $consulta->bindParam(":name", $name);
                $consulta->execute();
            }
            if($surname != null){
                $consulta = $conn->prepare("UPDATE users SET surname=:surname WHERE id = :user_id");
                $consulta->bindparam(":user_id", $user_id);
                $consulta->bindParam(":surname", $surname);
                $consulta->execute();
            }
            if($phone != null){
                $consulta = $conn->prepare("UPDATE users SET phone=:phone WHERE id = :user_id");
                $consulta->bindparam(":user_id", $user_id);
                $consulta->bindParam(":phone", $phone);
                $consulta->execute();
            }
            if($address != null){
                $consulta = $conn->prepare("UPDATE users SET address=:address WHERE id = :user_id");
                $consulta->bindparam(":user_id", $user_id);
                $consulta->bindParam(":address", $address);
                $consulta->execute();
            }
            if($postal_code != null){
                $consulta = $conn->prepare("UPDATE users SET postal_code=:postal_code WHERE id = :user_id");
                $consulta->bindparam(":user_id", $user_id);
                $consulta->bindParam(":postal_code", $postal_code);
                $consulta->execute();
            }
            if($city != null){
                $consulta = $conn->prepare("UPDATE users SET city=:city WHERE id = :user_id");
                $consulta->bindparam(":user_id", $user_id);
                $consulta->bindParam(":city", $city);
                $consulta->execute();
            }
            if($country != null){
                $consulta = $conn->prepare("UPDATE users SET country=:country WHERE id = :user_id");
                $consulta->bindparam(":user_id", $user_id);
                $consulta->bindParam(":country", $country);
                $consulta->execute();
            }
            if($password != null){
                $psw = password_hash($password, PASSWORD_DEFAULT);
                $consulta->bindparam(":user_id", $user_id);
                $consulta = $conn->prepare("UPDATE users SET password=:psw WHERE id = :user_id");
                $consulta->bindParam(":psw", $psw);
                $consulta->execute();
            }

        }catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }
?>