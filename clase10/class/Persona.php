<?php 

    class Persona {
        //atributos
        public $nombre;
        public $cedula;
        public $correo;
        public $genero;

        public function __construct()
        {
            $this->nombre = 'Fulano de tal';
            $this->cedula = "000000";
            $this->correo = "no definido";
            $this->genero = "no definido";
        }

        //metodos
        public function saludar(){
            echo "Hola, soy $this->nombre...<br>";
        }

        public function informacion(){
            echo "Nombre: $this->nombre <br>";
            echo "Cedula: $this->cedula <br>";
            echo "Correo: $this->correo <br>";
            echo "Genero: $this->genero <br>";
        }
    }
    /**
     * Ejercicio:
     *  Crear un 'metodo' llamado informacion, que imprima todos los atributos del objeto
     */