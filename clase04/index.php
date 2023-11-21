<?php

/**
 *  Mas funciones de String
 */

$word = "Hola Mundo desde PHP8";
echo strlen($word);  //cuenta los caracteres de un string
echo "<br>";
echo strrpos($word, '8');
echo "<br>";
echo str_contains($word, 'Mundial'); //busca el sgtring en la cadena y retorna un booleano(true/false)1/0

$cadena1 = "Prueba";
$cadena2 = "prueba";

if(strcmp($cadena1, $cadena2) === 0){  //identifica mayusculas de minusculas
    echo "Cadena iguales";
}else{
    echo "no iguales";
}

echo "<br>";
if(strcasecmp($cadena1, $cadena2) === 0){ //no identifica mayusculas de minusculas
    echo "Cadena iguales";
}else{
    echo "no iguales";
}
