<?php
    require_once __DIR__."/../model/DBconnect.php";
    require __DIR__."/../model/sign_up.php";
    $signed = null;
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $filters = filter_input_array(
            INPUT_POST,[
                'name' => FILTER_SANITIZE_STRING,
                'surname' => FILTER_SANITIZE_STRING,
                'psw' => FILTER_DEFAULT,
                'email' => FILTER_VALIDATE_EMAIL,
                'phone'  => FILTER_DEFAULT,
                'address' => FILTER_DEFAULT,
                'postal' => FILTER_VALIDATE_INT,
                'city' => FILTER_SANITIZE_STRING,
                'country' => FILTER_SANITIZE_STRING,
            ]
        );

        $name = $filters['name'];
        $surname = $filters['surname'];
        $password = $filters['psw'];
        $email = $filters['email'];
        $phone = $filters['phone'];
        $address = $filters['address'];
        $postal_code = $filters['postal'];
        $city = $filters['city'];
        $country = $filters['country'];
        
        $conn = DBconnect();
        $signed = sign_up($conn, $name, $surname, $password, $phone, $email, $address, $postal_code, $city, $country);
        $conn = null;
        
        if($signed){
            header("Location: ".$_SERVER['PHP_SELF']."?action=0");
            exit();
        }
    }
    include_once __DIR__."/../view/sign_up.php";
?>