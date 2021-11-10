<?php
    function email_search($email)
    {
        return false;
    }
    
    function sign_up($conn)
    {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $username = $_POST['username'];
        $psw = $_POST['psw'];
        $email = fetch($_POST['email'], PDO_ASSOC);
        $adress  = $_POST['adress'];
        $postal = $_POST['postal'];
        $city = $_POST['city'];

        
        $sql = email_search($email);
       
        if($sql == true)
        {
            echo "email exists";
            exit;
        }
        else
        {
            $consulta = $conn->prepare("INSERT INTO users VALUES (null,$name,$surname,$username,$psw,$email,0,$adress,$postal,$city,'Espana')");
            $consulta->execute();
            exit;
        }
    }
?>