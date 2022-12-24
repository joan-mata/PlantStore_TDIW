<?php
    function search($connection,$val){
        try{
            $SQL = "SELECT id, name, image, price FROM product WHERE name LIKE :val";
            $consult_products = $connection->prepare($SQL);

            $word = '%'.$val.'%';

            $consult_products->bindParam(":val",$word, PDO::PARAM_STR); 

            $consult_products->execute();
            $products_result = $consult_products->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo  "Error: " . $e->getMessage();
        }

        return($products_result);
    }
?>