<!DOCTYPE html>
<html>
    <head>
        <title>PlantStore</title>
        <link rel="stylesheet" type="text/css" href="css/style-cart.css"/>
    </head>
    <body>
        <?php require_once __DIR__.'/resource_base.php' ?> <!-- modificar -->
        
        <div class='span'></div>
        <div id='layout'>
            <section>
                <div style='float:left;'><a href='/index.php?accio=home' >🏠 Home</a></div>   
                <h1>CART</h1>
                <div id='cart-container'>
                    <?php require __DIR__.'/controller/control_cart.php';?>
                </div>
</section>
        </div>
        <div class='span'></div>
        
        <?php include __DIR__.'/resource_footer.php';?>
    </body>
</html>                   