<?php 
    /**
     *  Array
     * 
     *  Arrays asociativos
     */
    $miArray = array(1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 12, 13, 56, 65, 45, 32, 65, 878, 65, 89);
    $days = ['Lunes', 'Martes', 'Miercoles', 'Jueves'];
    $months = [];
    $any = [12, 56.57, true, "Hola"];

    echo "Total de elementos: " . count($miArray);
    echo "<hr>";
    echo $days[2];
    $days[] = 'Viernes';
    echo "<hr>";
    print_r($days);
    array_push($days, 'Sabado');
    echo "<hr>";
    print_r($days);
    $days[] = 'Domingo';
    echo "<hr>";
    var_dump($days);
    echo "<hr>";
    var_dump($any);
    echo "<hr>";
    $months[] = 'Enero';
    $months[] = 'Febrero';
    print_r($months);
    $months[0] = 'January';
    $months[1] = 'February';
    echo "<hr>";
    array_pop($days);
    print_r($days);
    echo "<hr>";
    unset($miArray[2]);
    print_r($miArray);
    echo "<hr>";
    $numbers = [9];
    echo is_array($numbers); //Valida que sea un array
    echo "<hr>";
    echo in_array(13, $miArray); //buscar y si encuentra devuelve true, si no , false
    echo "<hr>";
    echo array_search('Jueves', $days); //busca en el array y devuelve su indice
    echo "<hr>";
    foreach($days as $key => $value){
        echo "Indice: $key -- Valor: $value <br>";
    }
    echo "<hr>";
    foreach($days as $value){
        echo "Valor: $value <br>";
    }

    echo "<hr>";
    foreach($miArray as $key => $value){
        echo "Indice: $key -- Valor: $value <br>";
    }