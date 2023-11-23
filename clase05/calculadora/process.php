<?php
    session_start();
    //validar que todo este completo
    if(!isset($_POST['numberOne']) || $_POST['numberOne'] == '' || !isset($_POST['numberTwo']) || $_POST['numberTwo'] == ''){
        $_SESSION['error'] = 'Datos incompletos, verifique...';
        header('Location: calculadora.php');
        return;
    }

    //validar el operador
    $operator = $_POST['operator'];
    $operators =  ['+','-', '*','/'];
    if(!in_array($operator, $operators)){ //si no esta en el array
        $_SESSION['error'] = 'Error - Intento de sabotaje...';
        header('Location: calculadora.php');
        return;
    }

    //crear variables
    $num1 = $_POST['numberOne'];
    $num2 = $_POST['numberTwo'];

    switch ($operator){
        case '+':
            $response = $num1 + $num2;
            break;
        case '-':
            $response = $num1 - $num2;
            break;
        case '*':
            $response = $num1 * $num2;
            break;
        case '/':
            if($num2 == 0){
                $_SESSION['error'] = 'Error, no se puede dividir entre cero...';
                header('Location: calculadora.php');
                return;
            }
            $response = $num1 / $num2;
            break;
        default:
            $_SESSION['error'] = 'Error - Intento de sabotaje...';
            header('Location: calculadora.php');
            return;
            break;
    }

    unset($_SESSION['error']);
    $_SESSION['response'] = "El resultado es $response";
    header("Location: calculadora.php");
    // header("Location: calculadora.php?response=$response");
    return;