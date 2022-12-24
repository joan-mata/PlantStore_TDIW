<!-- configuracion -->

<!DOCTYPE html>       
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"/>
        <meta charset="utf-8"/>
        <title>PlantStore</title>
        <link rel="icon" type="image/png" href="img/icons/favicon.png" >
        <link rel="stylesheet" type="text/css" href="css/style-base.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
        <script src="js/functions.js"></script>
    </head>
    <body>
        <div id="layout-header"> 
            <div class='alert-container'>
            </div>
            
            <header id='main-header'> 
                <div class='buttons'>
                    <?php require __DIR__.'/controller/control_desplegable.php'; ?>

                    <div style='margin-left: 30px'>
                        <a href='/index.php?accio=cart'><img src='img/icons/logo-cart.png' id="logo-cart"/></a>
                    </div> 
                </div>
                <a href='index.php?accio=home'><img id='logo' src='img/icons/logo1.png' width='250px' position=''/></a> 
                 
            </header>
        </div>
        
	</body>
</html> 