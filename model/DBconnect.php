<?php
    require_once __DIR__."/../config.php";
    function DBconnect(){
        try{
            $conn = new PDO("mysql:host=".DATABASE_HOST.";dbname=".DATABASE_NAME.";charset=UTF8", DATABASE_USER, DATABASE_PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Error: ".$e->getMessage();
        }
        return($conn);
    }
?>