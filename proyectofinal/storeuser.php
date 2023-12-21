<?php 
    require_once "core/class/User.php";
   /**
    *   VALIDAR
    *   1) Que todos los datos vengan
    *   2) Que las contraseñas sean iguales
    *   Si falla la validación regresar al formulario y mostrar un mensaje de los errores
    */


    $password = trim($_POST['password']);
    $passwordCrypt = password_hash($password, PASSWORD_DEFAULT);
    //insertar
    $date = date('Y-m-d H:i:s');
    $data = [
        "name" => trim($_POST['name']),
        "email" => trim($_POST['email']),
        "password" => $passwordCrypt,
        "rol" => $_POST['rol'],
        "create" => $date,
        "update" => $date,
    ];
    $user = new User;
    if($user->create($data)){
        //mensaje
        header("Location: users.php");
    }else{
        //mensaje
        header("Location: createuser.php");
    };