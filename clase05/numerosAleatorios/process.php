<?php 
    session_start();

    //generar numero
    $number = rand();
    $_SESSION['number'] = $number;
    header('Location: index.php');


    /**
     * Instrucciones: 
     * Solicitar con un formulario el rango de numeros de donde
     * se generarán los números aleatorios, ej: 1-1000
     * 
     * Mostrar el historial de 'TODOS' los numeros generados
     * abajo del resultado.
     * 
     * Ningun número se debe repetir...
     * 
     */