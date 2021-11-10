<?php
    function email_search($email)
    {
        return false;
    }

    function sign_up($conn)
    {   
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $email = $_POST['email'];
            $phone = 0;
            $address = $_POST['address'];
            $postal_code = $_POST['postal_code'];
            $city = $_POST['city'];
            $country = $_POST['country'];
            
            $sql = email_search($email);
            if($sql == true)
            {
                echo "email exists";
                exit;
            }
            else
            {
                $consulta = $conn->prepare("INSERT INTO users(name, username,password, email, phone, address, postal_code, city, country) VALUES ( :name, :surname, :username, :password, :email, :phone, :address, :postal_code, :city, :country)");
                $consulta->bindParam(":name", $name);
                $consulta->bindParam(':surname', $surname);
                $consulta->bindParam(':username', $username);
                $consulta->bindParam(':password', $password);
                $consulta->bindParam(':email', $email);
                $consulta->bindParam(':phone', $phone);
                $consulta->bindParam(':address', $address);
                $consulta->bindParam(':postal_code', $postal_code);
                $consulta->bindParam(':city', $city);
                $consulta->bindParam(':country', $country);
                $consulta->execute();
                $consulta->exit();
            }
        }
    }

?>