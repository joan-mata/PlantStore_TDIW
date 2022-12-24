<?php
    $type = $_GET['type'];

    switch ($type) {
        case 'product-add-error':
            $text = 'Product not added';
            $color = 'red';
            break;

        case 'product-add-ok':
            $text = 'Product added';
            $color = 'green';
            break;
            
        case 'register-error-cp':
            $text = 'C.P. is not an integer number';
            $color = 'red';
            break;

        case 'register-error-email':
            $text = 'You are already registered';
            $color = 'red';
            break;
        
        case 'register-error-password':
            $text = "Passwords introduced don't match";
            $color = 'red';
            break;
        
        case 'login-error-email':
            $text = "Mail not registered";
            $color = 'red';
            break;

        case 'login-error-password':
            $text = 'Wrong password';
            $color = 'red';
            break;

        case 'quantity-product-error':
            $text = 'Minimum quantity reached';
            $color = 'red';
            break;

        case 'profile-data':
            $text = 'Profile information updated';
            $color = 'green';
            break;

        case 'profile-img':
            $text = 'Profile image updated';
            $color = 'green';
            break;
    }

    include __DIR__.'/../views/alert.php';
?> 
 