<?php
    include __DIR__."/login.php";
    function email_search($conn, $email)
    {
        $consulta = $conn->prepare("SELECT id FROM users WHERE email = :email");
        $consulta->bindParam(":email", $email);
        $consulta->execute();  
        return $consulta->rowCount() == 1;
    }
   
    function sign_up($conn, $name, $surname, $password, $phone, $email, $address, $postal_code, $city, $country)
    {   
        $psw = password_hash($password, PASSWORD_DEFAULT);
    
        $sql = email_search($conn, $email);
        if($sql==true)
        {
            $signed = false;
        }
        else
        {
            $consulta = $conn->prepare("INSERT INTO users(name, surname, password, email, phone, address, postal_code, city, country) VALUES (:name, :surname, :psw, :email, :phone, :address, :postal_code, :city, :country)");
            $consulta->bindParam(":name", $name);
            $consulta->bindParam(':surname', $surname);
            $consulta->bindParam(':psw', $psw);
            $consulta->bindParam(':email', $email);
            $consulta->bindParam(':phone', $phone, PDO::PARAM_INT);
            $consulta->bindParam(':address', $address);
            $consulta->bindParam(':postal_code', $postal_code, PDO::PARAM_INT);
            $consulta->bindParam(':city', $city);
            $consulta->bindParam(':country', $country);
            $consulta->execute();
            $signed = true;
        }
        return $signed;
    }
?>