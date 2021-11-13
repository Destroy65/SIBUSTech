<?php
    function email_search($conn, $email)
    {
        $consulta = $conn->prepare("SELECT id FROM users WHERE email = :email");
        $consulta->bindParam(":email", $email);
        $consulta->execute();  
        return $consulta->rowCount() == 1;
    }
   
    function username_search($conn, $username)
    {
        $consulta = $conn->prepare("SELECT id FROM users WHERE username = :username");
        $consulta->bindParam(":username", $username);
        $consulta->execute();  
        return $consulta->rowCount() == 1;
    }

    function sign_up($conn)
    {   
        $err = false;
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $username = $_POST['username'];
            $password = password_hash($_POST['psw'], PASSWORD_DEFAULT);
            $email = $_POST['email'];
            $phone = 0;
            $address = $_POST['address'];
            $postal_code = $_POST['postal'];
            $city = $_POST['city'];
            $country = $_POST['country'];
            
            $sql = email_search($conn, $email);
            $sql2 = username_search($conn, $username);
            if($sql==true || $sql2 == true)
            {
                $err = true;
            }
            else
            {
                $consulta = $conn->prepare("INSERT INTO users(name, surname, username,password, email, phone, address, postal_code, city, country) VALUES (:name, :surname, :username, :password, :email, :phone, :address, :postal_code, :city, :country)");
                $consulta->bindParam(":name", $name);
                $consulta->bindParam(':surname', $surname);
                $consulta->bindParam(':username', $username);
                $consulta->bindParam(':password', $password);
                $consulta->bindParam(':email', $email);
                $consulta->bindParam(':phone', $phone, PDO::PARAM_INT);
                $consulta->bindParam(':address', $address);
                $consulta->bindParam(':postal_code', $postal_code, PDO::PARAM_INT);
                $consulta->bindParam(':city', $city);
                $consulta->bindParam(':country', $country);
                $consulta->execute();
            }
            return $err;
        }
        return true;
    }
?>