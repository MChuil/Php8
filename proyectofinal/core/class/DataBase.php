<?php 

    class DataBase {

        private $dbHost = 'localhost';
        private $dbName = 'helpdesk';
        private $dbPassword = 'root';
        private $dbUser = 'root';
        protected $conexion;

        public function __construct(){
            try {
                $this->conexion = new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);
            } catch (\Throwable $th) {
                die("Error de conexión a la base de datos, " . $th->getMessage());
            }
        }
        
    }