<?php
    require_once __DIR__."/../model/DBconnect.php";
    include __DIR__."/../model/account.php";
    $user_id = $_SESSION['user_id'];
    $conn = DBconnect();
    $img = null; 
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $filters = filter_input_array(
            INPUT_POST,[
                'name' => FILTER_DEFAULT,
                'surname' => FILTER_DEFAULT,
                'password' => FILTER_DEFAULT,
                'phone'  => FILTER_DEFAULT,
                'address' => FILTER_DEFAULT,
                'postal' => FILTER_DEFAULT,
                'city' => FILTER_DEFAULT,
                'country' => FILTER_DEFAULT,
            ]
        );
        $name = $filters['name'];
        $surname = $filters['surname'];
        $password = $filters['password'];
        $phone = $filters['phone'];
        $address = $filters['address'];
        $postal_code = $filters['postal'];
        $city = $filters['city'];
        $country = $filters['country'];

        if ($_FILES['profile_image'] != null){
            $img = $_SESSION['user_id'].".jpg";
            $_SESSION['user_img'] = "/img/users/".$img;
            move_uploaded_file($_FILES['profile_image']['tmp_name'],  $usersImgPath.$img);
        }
        editUserData($user_id, $conn, $name, $surname, $password, $phone, $address, $postal_code, $city, $country, $img);
        header("Location: ".$_SERVER['PHP_SELF']."?action=account");
        $conn = null;
        exit();
    }

    $user_data = getUserData($user_id, $conn);
    include __DIR__."/../view/edit_account.php";
?>