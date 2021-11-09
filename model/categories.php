<?php
    function getCategories($conn){
        try{
            $consult_categories = $conn->prepare("SELECT id, name FROM categories");
            $consult_categories->execute();
            $categories = $consult_categories->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
        return ($categories);
    }
?>