<?php
    // Conexion a DB (DataBase)
    /**
     * PHP tiene 2 formas de conectarse a base de datos MySQL
     *  1) mysqli (Mysql)
     *  2) PDO (Mysql, SqlServer, Postgrest, Oracle)
     */

    //Conexion
    // new mysqli(    host,    usuario, contraseña, base de datos)
    
    try {
        $conexion = new mysqli('localhost', 'root', 'root', 'helpdesk');
        echo "Conexión exitosa...";
    } catch (\Throwable $th) {
        echo "Error de conexión a la base de datos, " . $th->getMessage();
    }

    /**
     * 
     * C reate
     * R ead
     * U pdate
     * D elete
     */