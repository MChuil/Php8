<?php 
    session_start();
    if(isset($_GET['clean'])){ //si existe la variable
        unset($_SESSION['password']);

        //eliminar TODAS las variables de sesión
        // session_destroy();
    }else{ //si no existe la variable
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $symbol = "!#$%&";
        $length = 7;
        $password = '';
        for($z = 0; $z < $length; $z++){
            $num = rand(0, strlen($caracteres)-1);
            $password .= $caracteres[$num];
        }

        //mezclar con los simbolos
        $finalPassword = str_shuffle($password . $symbol);
        $_SESSION['password'] = $finalPassword;
    }
    header("Location: index.php");
    return;