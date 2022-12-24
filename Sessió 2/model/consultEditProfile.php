<?php
    function updateUser($connection ,$name, $email, $password, $address, $town, $cp) { 
        
        try{
            $SQL = "UPDATE users SET name = :name, password = :password, address = :address, town = :town, cp = :cp WHERE email=:email";

            $consult_products = $connection->prepare($SQL);

            $c_pw = password_hash($password,PASSWORD_BCRYPT);

            $consult_products->bindParam(":name", $name, PDO::PARAM_STR); 
            $consult_products->bindParam(":email", $email, PDO::PARAM_STR); 
            $consult_products->bindParam(":password", $c_pw, PDO::PARAM_STR); 
            $consult_products->bindParam(":address", $address, PDO::PARAM_STR); 
            $consult_products->bindParam(":town", $town, PDO::PARAM_STR); 
            $consult_products->bindParam(":cp", $cp, PDO::PARAM_INT);

            $consult_products->execute(); 
        }catch(PDOException $e){
            echo  "Error: " . $e->getMessage();
        }
    }

    function updateImg($connection, $email, $image) { 
        
        try{
            $SQL = "UPDATE users SET image = :image WHERE email=:email";
            //$SQL = "INSERT INTO users(name,email,password,address,town,cp) VALUES (:name, :email, :password, :address, :town, :cp)";
            $consult_products = $connection->prepare($SQL);

            $consult_products->bindParam(":email", $email, PDO::PARAM_STR);
            $consult_products->bindParam(":image", $image, PDO::PARAM_STR);

            $consult_products->execute();
        }catch(PDOException $e){
            echo  "Error: " . $e->getMessage();
        }
    }
?>