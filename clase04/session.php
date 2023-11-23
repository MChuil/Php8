<?php
    session_start();   
    /**
     * Manejo de sesiones------ $_SESSION['variable']
     * Las sesiones estan disponible solo mientras el navegador no se cierre o no se hayan
     * eliminado las sesiones de forma manual.
     * Sirven para compartir información entre los script
     * 
     */
    $_SESSION['id'] = 56;

    $_SESSION['name'] = 'Maria';

    $_SESSION['id'] = 99;

    echo $_SESSION['id'];

    unset($_SESSION['id']); //eliminar
    
    print_r($_SESSION);

