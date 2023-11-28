<?php
    /**
     * Manejo de ficheros (archivos.txt)
     * 
     *  Creación  de fichero
     *      fopen(nombreDelFichero, formaDeApertura)
     *  
     */
    $file = fopen("ejemplo.txt", "r");
    fwrite($file, "Favor de entregar todos sus trabajos pendientes los que aun no han entregado\r\n");
    fwrite($file, "Si no tienen equipo, pueden hacerlo desde su movil en una pagina online\r\n");
    fclose($file);
    echo "Fichero creado...";