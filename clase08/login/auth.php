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


    $email = strtolower($_POST['email']);
    $password = strtolower($_POST['password']);
    
    switch ($_POST['action']) {
        case 'login':
            $file = fopen('credenciales.txt', 'r');
            $row = 1;
            while(!feof($file)){
                $line = fgets($file); //leo la linea
                if($row == 2){ //validar el correo
                    echo $line;
                    echo $email;
                    if(trim($email) != trim($line)){
                        echo "Correo incorrecto...";
                    }
                }

                if($row == 3){ //validar la contraseña
                    if(trim($password) != trim($line)){
                        echo "Contraseña incorrecta...";
                    }
                }
                $row += 1;
            }
            fclose($file);
            break;
        case 'register':
            //validar que no venga vacio nombre
            $name = $_POST['name'];
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
