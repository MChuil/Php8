<?php 

    if(empty($_POST['action'])){
        //rerdirigir
        header("Location: index.php");
        return;
    }

    // if($_POST['action']=="login"){

    // }else if($_POST['action'] == "register"){

    // }else{
    //     header("Location: index.php");
    //     return;
    // }

    //validar que no vengan vacios correo y contraseña


    $email = trim(strtolower($_POST['email']));
    $password = trim(strtolower($_POST['password']));
    
    switch ($_POST['action']) {
        case 'login':
            $file = fopen('credenciales.txt', 'r');
            $row = 1;
            $error = false;
            $nombre;
            while(!feof($file)){
                $line = fgets($file); //leo la linea
                if($row == 1){
                    $nombre = $line;
                }

                if($row == 2){ //validar el correo
                    if(trim($email) != trim($line)){
                        $error = true;
                    }
                }

                if($row == 3){ //validar la contraseña
                    if(trim($password) != trim($line)){
                        $error = true;
                    }
                }
                $row += 1;
            }
            fclose($file);
            // if($error== false){
            if(!$error){
                echo "Autenticación correcta...Bienvenido " . ucfirst($nombre);
            }else{
                echo "Correo y/o contraseña incorrecta...";
            }
            break;
        case 'register':
            //validar que no venga vacio nombre
            $name = trim($_POST['name']);
            $file = fopen('credenciales.txt', 'w');
            fwrite($file, "$name\r\n");
            fwrite($file, "$email\r\n");
            fwrite($file, "$password");
            fclose($file);
            echo "Registro exitoso...";
            break;
        default:
            header("Location: index.php");
            break;
    }
