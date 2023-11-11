<?php

    /**
     *  OPERADORES MATEMATICOS---------------
     *      + suma
     *      - resta
     *      / division
     *      * multiplicación
     *      ** exponente
     *      % modulo o resto
     *      = asignacion
     */

    $numerOne = 89;
    $numberTwo = 32;

    $suma = $numerOne + $numberTwo;
    // echo "La suma de " . $numerOne . " + " . $numberTwo . " es: " . $suma;
    echo "La suma de {$numerOne} + {$numberTwo} es: {$suma}";
    echo "<br>";
    $resta = $numerOne - $numberTwo;
    echo "La resta de {$numerOne} - {$numberTwo} es: {$resta}";
    echo "<br>";

    $number = 8;
    $exponent  = 3;
    $result = $number ** $exponent;
    echo $result;
    echo "<br>";

    $residuo = 4 % 2;
    echo "Residuo: {$residuo}";

    $division = 9/2;  //4.5
