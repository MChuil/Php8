<?php
    session_start();
    require_once 'core/class/User.php';

    if(empty($_POST['email']) || empty($_POST['password'])){
        $_SESSION['error'] = "Datos incompletos";
        header("Location: login.php");
        return;
    }

    $user = new User;
    $response = $user->searchEmail($_POST['email']);
    if(!$response){
        $_SESSION['error'] = "Correo y/o contraseña invalido";
        header("Location: login.php");
        return;
    }
    

    if(!password_verify($_POST['password'],$response[0]['password'])){
        $_SESSION['error'] = "Correo y/o contraseña invalido";
        header("Location: login.php");
        return;
    }

    $_SESSION['userid'] = $response[0]['id'];
    $_SESSION['username'] = $response[0]['name'];
    $_SESSION['userrol'] = $response[0]['rol'];
    $_SESSION['logged'] = true;

    header("Location: index.php");



