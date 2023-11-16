<?php 
    /**
     * Operadores de comparación
     *      >   mayor que
     *      <   menor que
     *      >=  mayor o igual que
     *      <=  menor o igual que
     *      ==  igual que
     *      != (<>)  diferente que
     */

    /**
     * (144>25) true
     *  3 >= 3  true 
     *  23 != 23 false
     */

    /**
     * Funciones condicionales
     * 
     *  If...else
     * 
     *  if(condicion){  //si la condición es verdadera
     *      codigos
     *  }else{ //si no (si no es verdadero)
     *      codigos
     * }
    */

    $number = 6.5;

    if($number >= 6.5){
        echo "Hola desde PHP";
    }else{
        echo "Adios desde PHP";
    }
echo "<br>";
    /**
     *   menor de 5 'deficiente'
     *      6   'insuficiente'
     *      7   'aceptable'
     *      8   'sobresaliente'
     *      9   'sobresaliente'
     *      10  'excelente'
     */

    /**
     * OPERADORES LOGICOS
     * OR   ||
     * AND  &&
     */
    $promedio = 10.3;

    if($promedio < 6){
        echo "Deficiente";
    }elseif($promedio >= 6 && $promedio < 7){
        echo "Insuficiente";
    }elseif($promedio >= 7 && $promedio< 8){
        echo "Aceptable";
    }elseif($promedio >= 8 && $promedio< 9){
        echo "Sobresaliente";
    }elseif($promedio >= 9 && $promedio< 10){
        echo "Sobresaliente";
    }elseif($promedio == 10){
        echo "Excelente";
    }else{
        echo "Tu promedio esta fuera de rango";
    }

    /**
     * Switch
     *  switch(valor a evaluar){
     *      case 'valor':
     *          codigo;
     *          break;
     *      case 'valor':
     *          codigo;
     *          break;
     *      default:
     *          codigo;
     *          break;
     *  }
     * 
     */

    echo "<br>";
    $sexo = 'x';
    switch ($sexo) {
        case 'H':
            echo "Masculino";
            break;
        case 'M':
            echo "Femenino";
            break;
        default:
            echo "No se...";
            break;
    }

