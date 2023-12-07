<?php 
    include_once "class/Persona.php";

    // $personaUno = new Persona;
    // $personaUno->nombre = "Maria Martinez";
    // $personaUno->genero = "Hombre";
    // $personaUno->correo = "miguel@test.com";
    // $personaUno->saludar();
    // print_r($personaUno);

    // $personaDos = new Persona;
    // $personaDos->nombre = "Luis Paredes";
    // $personaDos->genero = "Hombre";
    // $personaDos->correo = "luis@test.com";
    // $personaDos->saludar();
    // var_dump($personaDos);

    $miguel = new Persona;
    $miguel->informacion();
    $miguel->nombre = "Miguel Martinez";
    $miguel->cedula = "A121312";
    $miguel->correo = "migueltest.com";
    $miguel->genero = "Hombre";
    $miguel->informacion();