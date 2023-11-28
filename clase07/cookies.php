<?php
    /**
     *  Cookies
     *  
     * $_COOKIE[]
     * 
     *  Crear una cookie
     *      setcookie("nombreDeLaCookie", "valore(s)", expiracion);
     * 
     * 
     */
    $text = "Mi primer Cookie con PHP 8";
    // Creamos una cookie
    setcookie("php8", $text, time() + 300);

    //leer una cookie
    echo $_COOKIE["php8"];

    //modificar la información almacenada
    // setcookie("php8", "Soy el nuevo valor de la cookie");

    //Borrar cookie
    unset($_COOKIE["php8"]);

    setcookie("php8", "", time()-60);