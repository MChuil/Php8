<?php 
    session_start();

    if(empty($_POST['email']) || empty($_POST['password'])){
        $_SESSION["msj"] = "Datos incompletos, favor de verificar...";
        header("Location: index.php");
        return;
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email != 'developerphp@test.test' || $password != '1234AbcD'){
        $_SESSION['msj'] = "El correo y/o la contraseña son incorrectos...";
        header("Location: index.php");
        return;
    }

    unset($_SESSION['msj']); //borrando la variable de sesion
    echo "Acceso permitido...";