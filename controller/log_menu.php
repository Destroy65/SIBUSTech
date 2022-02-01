<?php
    require_once __DIR__."/../model/DBconnect.php";
    require __DIR__."/../model/login.php";
    require __DIR__."/../model/cart.php";
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $filters = filter_input_array(
            INPUT_POST,[
                'email' => FILTER_VALIDATE_EMAIL,
                'psw' => FILTER_DEFAULT,
            ]
        );
        $email = $filters['email'];
        $psw = $filters['psw'];
        $conn = DBconnect();
        $user_id = login($conn, $email, $psw);
        if($user_id != 0){
            $_SESSION['user_id'] = $user_id;
            $_SESSION['logged'] = true;
            $_SESSION['user_img'] = "/img/users/".getUserImg($conn, $user_id);
            $conn = null;
            header("Location: ".$_SERVER['PHP_SELF']."?action=0");
            exit();
        }
        $conn = null;
    }
    include __DIR__."/../view/log_menu.php"; 
?>