<?php
    require_once __DIR__.'/../model/connectBD.php';
    require_once __DIR__.'/../model/consultEditProfile.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['name'])){
            $filters = filter_input_array( INPUT_POST, 
            [
                'name' => FILTER_SANITIZE_STRING,
                'email' => FILTER_SANITIZE_EMAIL,
                'pw' => FILTER_SANITIZE_STRING,
                're_pw' => FILTER_SANITIZE_STRING,
                'dir' => FILTER_SANITIZE_STRING,
                'town' => FILTER_SANITIZE_STRING,
                'cp' => FILTER_SANITIZE_NUMBER_INT,
            ]
            );
     
            $name = $filters['name'];
            $email = $filters['email'];
            $password = $filters['pw'];
            $repeat_password = $filters['re_pw'];
            $dir = $filters['dir'];
            $town = $filters['town'];
            $cp = $filters['cp'];       
    
            if ($password != $repeat_password) { //LA 2 PW NO SON IGUALES
                $alert = 'register-error-password';
    
            } elseif (is_int($cp) !== false) { //CP ES INTEGER 
                $alert = 'register-error-cp';
    
            } else {  // TODO CORRECT

                $connection = connectaBD();
                updateUser($connection ,$name, $email, $password, $dir, $town, $cp); //ACTUALIZAMOS BASE DE DATOS
                
                //ACTUALIZAR SESIONES
                $_SESSION['user_id'] =  $email;
                $_SESSION['user_name'] =  $name;
                $_SESSION['user_address'] =  $dir;
                $_SESSION['user_town'] =  $town;
                $_SESSION['user_cp'] =  $cp;  
                
                $alert = 'profile-data';  
            }
        }
        else{
            $email = $_SESSION['user_id'];

            if (isset($_FILES['img']) && !empty($_FILES['img'])) {
                $imgName= $email.basename($_FILES['img']['name']);
                move_uploaded_file(
                    $_FILES['img']['tmp_name'],
                    $filesAbsolutePath.$imgName
                );

                $connection = connectaBD();
                updateImg($connection, $email, $imgName); //ACTUALIZAMOS BASE DE DATOS

                $_SESSION['user_img'] =  $imgName;
                $alert = 'profile-img';
            }
        }
    }    

    include __DIR__.'/../views/edit_profile.php';
    
?> 