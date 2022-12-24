<!DOCTYPE html>
<html>
    <head>
        <title>PlantStore</title>
        <link rel="stylesheet" type="text/css" href="css/style-edit-profile.css"/>
    </head>
    <body>
        <?php require_once __DIR__.'/resource_base.php' ?>
        
        <div id='layout'>

            <div style='float:left;'><a href='/index.php?accio=home' >🏠 Home</a></div>
            <section>
                <h1>EDIT PROFILE</h1>
                <div id='profile-container'>
                    <?php require __DIR__.'/controller/control_edit_profile.php';?>
                </div>
            </section>
        </div>
        <div class='span'></div>
        
        <?php include __DIR__.'/resource_footer.php';?>
    </body>
</html>              