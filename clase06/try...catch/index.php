<?php 
    session_start();
    /**
     *  Manejo de error
     *  try{
     *      códigos
     *      ....
     *      ...
     *      ...
     *  }catch($variable){
     *      
     *  }
     */

    try {
        $number = $_POST['number'];
        if(!is_numeric($number)){ //si NO es numerico
            throw new Exception("Debe ingresar solo numeros..."); //genero un error con un msj personalizado
            return;
        }
        $cubo = $number ** 3;
        echo "El cubo de $number es $cubo";
        // unset($_SESSION['error']);
        session_destroy();
        // if(is_numeric($number)){
        //     $cubo = $number ** 3;
        //     echo "El cubo de $number es $cubo";
        // }else{
        //     $_SESSION['error'] = "Debe ingresar solo numeros...";
        //     header("Location: formulario.php");
        //     return;
        // }
    } catch (\Throwable $error) {
        // echo $error->getMessage();  //Guardar en un archivo de log
        // print_r($error);
        // echo "Ha ocurrido un error, intente de nuevo...";
        $_SESSION['error'] = $error->getMessage();
        header("Location: formulario.php");
        return;
    }