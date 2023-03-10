<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { //SI SE HA RELLENADO EL FORMULARIO, TRATAMOS DATOS
        require_once __DIR__.'/../model/connectBD.php';
        require_once __DIR__.'/../model/consultRegister.php'; 

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

        //¿Se puede quitar?
        $name = $filters['name'];
        $email = $filters['email'];
        $password = $filters['pw'];
        $repeat_password = $filters['re_pw'];        
        $dir = $filters['dir'];
        $town = $filters['town'];
        $cp = $filters['cp'];

        
        $connection = connectaBD();

        //Existe el usuario?
        $IamRegister = ifRegisterBefore($connection, $email);



        if ($IamRegister === true) { //SI EL USUARIO YA ESTA REGISTRADO
            $alert = 'register-error-email';
            require __DIR__.'/../views/register.php';

        } elseif ($password !== $repeat_password) { //LA 2 PW NO SON IGUALES
            $alert = 'register-error-password';
            require __DIR__.'/../views/register.php';

        } elseif (is_int($cp) !== false) { //CP ES INTEGER 
            $alert = 'register-error-cp';
            require __DIR__.'/../views/register.php';
            
        } else {  // TODO CORRECTO
            register($connection, $name, $email, $password, $dir, $town, $cp);
            require __DIR__.'/../views/register_result.php';
        }
        
    }
    else {
        require __DIR__.'/../views/register.php';
    }
?>