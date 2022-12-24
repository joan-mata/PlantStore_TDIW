<?php 
    if(isset($_GET['val'])) {
        require_once __DIR__.'/../model/connectBD.php';
        require_once __DIR__.'/../model/consultSearch.php';

        //consulta
        $connection = connectaBD();
        
        $products = search($connection,$_GET['val']);

        if(!empty($products)){ // BUSQUEDA ENCONTRADA
            include __DIR__.'/../views/search_result.php';
        } 
        else { // BUSQUEDA NO ENCONTRADA
            include __DIR__.'/../views/search_notfound.php';
        }
    }
    else { //Imprimimos buscador
        include __DIR__.'/../views/search_browser.php'; 
    }
?>