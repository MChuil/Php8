<?php

// este un comentario de 1 sola linea

/**
 * Este es un comentario
 * que ocupa
 * varias lineas
 * de texto.
 */

echo "Hola Mundo...desde PHP 8";


/**
 *  ------------- VARIABLES ---------------
 *  Son espacios en memoria para almacenar información
 *  Para declarar una variable se de inciar con el simbolo de dolar ($) seguido
 *  del nombre que le asignemos a la variable, ejemplo:
 *  
 *  $nombre;
 * 
 *  Reglas para declarar variables:
 *  1) no se puede iniciar con un numero, ni con un simbolo, los unicos simbolos
 *     permitidos son guion medio y guion al piso ( - _ )
 *      $9producto;        $producto9;
 *      $#item;
 *  2) No se deben utilizar palabras reservadas del lenguaje
 *      $echo;
 *  3) No utilizar espacios en blanco
 *      $nombre del producto;
 * 
 * 
 *  Buenas prácticas al declarar variables:
 *  1) Debes ser lo mas descriptiva posible
 *      $n; $can; $xx;
 *  2) Utilizar el camelCase cuando el nombre de la variables se de mas de una palabra
 *      $productosVendidos;   $impuestoDeLaVenta;
 *  3) Utilizar nombre en ingles 
 * 
 */

//Se declara y se inicializa variables
$name = 'Miguel C.';
$email = "developer.chuil@gmail.com";

//solo se declara
$number;

//inicializando la variable
$number = 9;

echo "<br>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";


$name = "Miguel C. Martinez";
echo $name;
echo "<br>";
$name = 98;
echo $name;
echo "<br>";
$name = true;
echo $name;


/**
 * --------- TIPOS DE DATOS --------------
 * string o Cadena "sdadasd345635$%&$%&$/"
 * Number 1234557899
 * booleans true/false
 * 
 */


/**
 *  ------------- CONSTANTES ---------------
 *  Son espacios en memoria que almacenan información, pero que no se puede cambiar
 *  
 *  define('nombreDeLaConstante', valor);
 * 
 *  Reglas para declarar constantes:
 *  1) no se puede iniciar con un numero, ni con un simbolo, los unicos simbolos
 *     permitidos son guion medio y guion al piso ( - _ )
 *      $9producto;        $producto9;
 *      $#item;
 *  2) No se deben utilizar palabras reservadas del lenguaje
 *      $echo;
 *  3) No utilizar espacios en blanco
 *      $nombre del producto;
 * 
 * 
 * Buenas practicas para declarar constantes:
 *  1) Debes ser lo mas descriptiva posible
 *      N CAN XX
 *  2) Utilizar guiones al piso cuando el nombre de la constante sea de mas de una palabra
 *      PRODUCTOS_VENDIDOS;   IMPUESTO_DE_LA_VENTA;
 *  3) Utilizar nombre en ingles 
 *  4) Sean solo mayusculas
 */


define('PI', 3.1416);
define('IS_LOGGED', true);

echo PI;