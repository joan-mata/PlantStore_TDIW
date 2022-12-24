<?php
    function getOrders($connection,$user_id){
        try{
            $SQL = "SELECT * FROM cart WHERE user = :user";
            $consult_order = $connection->prepare($SQL);
            
            $consult_order->bindParam(":user", $user_id, PDO::PARAM_STR);

            $consult_order->execute();
            $order = $consult_order->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo  "Error: " . $e->getMessage();
        }
        return $order;
    }

    function getSubOrder($connection,$id_cart){
        try{
            $SQL = "SELECT * FROM subcart WHERE id_cart = :id_cart";
            $consult_order = $connection->prepare($SQL);
            
            $consult_order->bindParam(":id_cart", $id_cart, PDO::PARAM_STR);

            $consult_order->execute();
            $order = $consult_order->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo  "Error: " . $e->getMessage();
        }
        return $order;
    }

?>