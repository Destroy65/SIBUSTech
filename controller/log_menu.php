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
            $aux = getUserCart($user_id, $conn)[0];
            $_SESSION['price'] = $aux['price'];
            if(isset($aux)){
                $aux2 = getCartItems($aux['id'], $conn);
                foreach($aux2 as $i){
                    $_SESSION['n_items'] += $i['quantity'];
                }
            }
            $conn = null;
            header("Location: ".$_SERVER['PHP_SELF']."?action=0");
            exit();
        }
        $conn = null;
    }
    include __DIR__."/../view/log_menu.php"; 
?>