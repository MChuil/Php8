<?php 
    /**
     *  funciones comunes de PHP
     *      date --fecha y hora
     *      strtolower  -- pasar a minusculas
     *      strtoupper -- pasar a mayusculas
     *      ucfirst -- Primer letra en mayuscula
     *      ucwords -- primer letra de palabra en mayuscula
     *      trim  -- elimina espacios en blanco al principio y al final
     *      str_repeat -- repite un string una 'N' cantidad de veces
     *      str_replace --remplaza un caracter o caracteres de una cadena
     */
    echo date('Y-m-d');
    echo "<br>";
    echo date('Y-m-d H:i:s');
    echo "<br>";
    echo date('Y-F-d');
    echo "<br>";
    echo date('Y-M-d');
    echo "<br>";
    echo date('d-M-y');

    $texto = "php 8 y mqysl";
    echo "<br>";
    echo strtoupper($texto);
    echo "<br>";
    echo strtolower($texto);
    echo "<br>";
    echo ucfirst($texto);
    echo "<br>";
    echo ucwords($texto);

    $frase = '       no hay peor batalla que la que no se hace...       ';
    echo "<br>";
    echo trim($frase);
    echo "<br>";
    echo str_repeat("-", 40);

    $fecha = '15-11-2023';
    echo "<br>";
    echo str_replace('-', '/', $fecha);
    echo "<br>";
    echo str_replace('2023', 'dos mil veintitres', $fecha);
    
    /**
     * funciones personalizadas
    */