<?php 
    /**
     * Ciclos
     *  Permite realizar una cantidad de instrucciones una 'N' cantidad de veces
     *  
     * 
     *  While(condición){
     *      código;
     *      acumulador;
     *  }
     */

    $number = 42;

    while($number < 100){  //42, 52, 62,72,82,92,102
        echo "Hola...<br>";
        // $number++;
        $number += 10;
    }

    while($number>10){
        echo "PHP <br>";
        $number-=10;
    }

    /**
     *  Do...while
     * 
     *  Do{
     *      codigo;
     *      acumulador
     *  }while(condicion)
     */
    
    do{
        echo "Adios...<br>";
        $number += 10;
    }while($number < 100);


    /**
     *  FOR
     * 
     *  for(variable = valor; condicion; incrementar/descrementar){
     *      codigo
     * 
     *  }
     */
    $y = 10;
    for($x = 1; $x <= $y; $x++){
        echo "$x <br>";
    }

    /**
     *  Ejercicio: Crear la tabla del 1 con los 3 ciclos
     *      1x1 = 1
     *      1x2 = 2
     *      ...
     *      1x10 =10
     *
     */


    for($i=1; $i <= 10; $i++){
        echo "1 x $i = " . (1*$i) ."<br>";
    }

    $y = 1;
    while($y<=10){
        echo "3 x $y = " . (3*$y) ."<br>";
        $y++;
    }

    $a = 1;
    do{
        echo "6 x $a = " . (6*$a) ."<br>";
        $a++;
    }while($a<=10);

    /**
     *  Crear con dos ciclos, uno dentro de otro (ustedes eligen), 
     *  las tablas del 1 al 10
     * 
     */