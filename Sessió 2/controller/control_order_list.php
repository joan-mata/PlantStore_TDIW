<?php  
    require_once __DIR__.'/../model/connectBD.php';
    require_once __DIR__.'/../model/consultOrders.php';

    //LEER TODOS LOS PEDIDOS

    $connection = connectaBD(); 
    $orders = getOrders($connection,$_SESSION["user_id"]);

    if(!empty($orders)){
        //LEER SUBPEDIDOS POR CADA PEDIDO
        foreach($orders as $order){
            $sub_order = getSubOrder($connection,$order['id_cart']);
            include __DIR__.'/../views/order_list.php';
        }
        
    }
    else {
        include __DIR__.'/../views/order_list_empty.php';
    }
    
?>