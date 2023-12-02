<?php 
    
    // $file = fopen('datos.txt', 'r'); //lectura
    // $file = fopen('datos.txt', 'w'); //sobreescribir
    // $file = fopen('datos.txt', 'w+'); //sobreescribir (escritura/lectura)
    // $file = fopen('datos.txt', 'a'); //adicionar, puntero se ubica al final (escritura)
    // $file = fopen('datos.txt', 'a+'); //adicionar, puntero se ubica al final (escritura/lectura)

    //apertura/creación
    // $file = fopen('datos.txt', 'w+');

    //Escribir
    // fwrite($file, "Manejo de archivos\r\n");
    // fwrite($file, "utilizando PHP en su version\r\n");
    // fwrite($file, "8.x");

    //cerrar
    // fclose($file);
    // echo "Fichero creado";

    $fileName = "datos.txt";
    // $file = fopen($fileName, 'r'); //aperturando para lectura
    //leer la información
    // $content = fread($file, filesize($fileName));
    // echo $content;
    // fclose($file);

    //eliminar el fichero
    // if(is_file($fileName)){
    //     echo unlink($fileName);
    // }else{
    //     echo "Fichero no existe";
    // }

    if(is_file($fileName)){ //si existe se lee
        $file = fopen($fileName, 'r');
        while(!feof($file)){ //mientras NO hayas llegado al final
            $line =  fgets($file); //imprime
            echo "<strong>$line</strong><br>";
        }
    }else{ //si no existe se crea
        $file = fopen($fileName, 'w');
        fwrite($file, "Manejo de archivos\r\n");
        fwrite($file, "utilizando PHP en su version\r\n");
        fwrite($file, "8.x");
    }
    fclose($file);

    /**
     * Ejercicio:
     * 2 archivos
     * 
     * 1ro un formulario de registro, que pregunte: nombre, 
     * correo y password
     * y almance esa información en un archivo de texto
     * 
     * 
     * 2do un formulario de login, que pida correo y password. 
     * Valide la información del
     * formulario con la información del archivo de texto
     */
