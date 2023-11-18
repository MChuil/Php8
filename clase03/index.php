<?php 
    /**
     *  rand - Genererar numeros aleatorios
     *  PI
     *  number_format - Formato a un numero
     *  sqrt - la raiz cuadrad de un numero
     */

    echo rand(); 
    echo "<br>";
    echo rand(1, 100);
    echo "<br>";
    echo pi();
    echo "<br>";
    echo number_format(52.89, 1, ",");
    echo "<br>";
    echo number_format(pi(), 2);
    echo "<br>";
    $num = 16;
    echo sqrt($num);

    /**
     *  Funciones
     *      Es un trozo de codigo que realiza algo
     *  - reutilizar código
     *  - evitamos duplicidad de codigo
     *  - dividir nuestro codigo en trozos mas pequeños
     *  function nombreDeLaFuncion(){
     *      código
     *  }
     * 
     *  nombreDeLaFuncion();
     * 
     *  Tipo de funciones:
     *  - sin parametros
     *  - con parametros obligatorios
     *  - con parametros opcionales
     *  - retornan valores
     *  - no retornan valores
     * 
     *  function nombre(param1, param2,...){
     * 
     *  }
     */ 

     //Sin parametros
    function saludo(){
        echo "<h2>Hola desde una funcion personalizada en Php 8</h2>";
    }

    saludo();
    echo "<br>";
    echo "<br>";
    //Con parametros y son obligatorios
    function hi($name, $lastName){
        echo "Hola $name $lastName, bienvenido a Php 8";
    }

    hi('Miguel', 'Martinez');
    echo "<br>";
    echo "<br>";
    //Con parametros y son opcionales
    function hello($name = 'Desconocido', $lastName = 'De Tal'){
        echo "Hola $name $lastName, bienvenido al curso...";
    }

    hello('Miguel', 'Martinez');
    echo "<br>";
    echo "<br>";
    hello('Miguel');
    echo "<br>";
    echo "<br>";
    hello('Miguel');
    echo "<br>";
    echo "<br>";

    //Los parametros opcionales siempre van al final
    //no retorna ningun valor
    function sum($x, $y = 3.1416){
        echo $x + $y;
    }

    sum(8);
    echo "<br>";
    echo "<br>";
    sum(25,658);

    //con retorno de valores
    function circleArea($r){
        $area = pi() * ($r * $r);
        return $area;
    }

    $result = circleArea(8);
    echo "<br>";
    echo "<br>";
    echo "Resultado: $result";


    /**
     *  Crear una función para cada operacion básica (suma, resta, multiplicación y división)
     *  Cada función debe solicitar 2 parametros, uno opcional y otro obligatorio
     *  2 funciones deben retornar el resultado y almacenarlo en variables y las otras dos deben imprimirlo en pantalla
     *  El mensaje debe ser asi:
     *     ej. La suma de 96 mas 4, es igual a : 100
     * 
     *  En el caso de la división verificar que el divisior no sea cero, en caso de que lo sea, mandar un msj que diga
     *  que 'no se puede dividir entre cero'
     */