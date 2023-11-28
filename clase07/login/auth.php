<?php
    //validar que existan datos
    if(empty($_POST['email']) || empty($_POST['password'])){
        $_SESSION['msj'] = "Faltan datos, favor de completar...";
        header("Location: index.php");
        return;
    }

    //Validar las credenciales
    if($_POST['email'] != "php8@test.com" || $_POST['password'] != "123456"){
        $_SESSION['msj'] = "Correo y7o contraseña incorrectos...";
        header("Location: index.php");
        return;
    }
    
    //Si esta chuleado 'recuerdame', crear una cookie
    remember($_POST['recuerdame']);


    echo "Bienvenido a la sección privada";


    function remember($check){
        if(!empty($check)){ //si no esta vacio
            //crear la cookie
            setcookie('email', $check, time() + 60*60*24*365);
        }else{ //si esta vacia, se elimina la cookie
            setcookie('email', "", time() - 60);
        }
    }