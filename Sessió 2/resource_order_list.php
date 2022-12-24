<!DOCTYPE html>
<html>
	<head>
        <title>PlantStore</title>
        <link rel="stylesheet" type="text/css" href="css/style-order-list.css"/>
	</head>
	<body>
        <?php require_once __DIR__.'/resource_base.php' ?> <!-- modificar -->
        <div id='layout'>
            <div style='float:left;'><a href='/index.php?accio=home' >🏠 Home</a></div> 
            <section>
                <h1>MY ORDERS</h1>
                    <div id='orders-container'>
                        <?php require __DIR__.'/controller/control_order_list.php';?>
                    </div>
            </section>
        </div>
        <?php include __DIR__.'/resource_footer.php';?>
	</body>
</html>