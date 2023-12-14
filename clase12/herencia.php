<?php

    //clase padre
    class Persona{
        //atributos-----------
        private $name;
        private $lastName;
        private $edad;
        private $email;
        private $phone;
        private $address;
        private $city;

        public function __construct($name, $lastName)
        {
            $this->name = $name;
            $this->lastName = $lastName;
        }

        public function getName()
        {
                return $this->name;
        }

        public function setName($name)
        {
                $this->name = $name;
        }

        public function getLastName()
        {
                return $this->lastName;
        }

        public function setLastName($lastName)
        {
                $this->lastName = $lastName;

        }

        public function getEdad()
        {
                return $this->edad;
        }

        public function setEdad($edad)
        {
                $this->edad = $edad;

        }

        public function getEmail()
        {
                return $this->email;
        }

        public function setEmail($email)
        {
                $this->email = $email;
        }

        public function saludar(){
            echo "Hola amigo, soy $this->name $this->lastName";
        }
    }

    //clase hija
    class Colombiano extends Persona{
        private $barrio;
        private $cedula;
        private $departamento;
        private $apellidoMaterno;
        
        public function __construct($name, $apellidoPaterno, $apellidoMaterno){
            parent::__construct($name, $apellidoPaterno);
            $this->apellidoMaterno = $apellidoMaterno;
        }
        
        public function getBarrio()
        {
            return $this->barrio;
        }

        public function setBarrio($barrio)
        {
            $this->barrio = $barrio;
        }

        public function getCedula()
        {
            return $this->cedula;
        }

        public function setCedula($cedula)
        {
            $this->cedula = $cedula;
        }

        public function getDepartamento()
        {
                return $this->departamento;
        }

        
        public function setDepartamento($departamento)
        {
                $this->departamento = $departamento;

        }

        public function saludar(){
            echo "Aja y tu que,  soy " . $this->getName() . " " . $this->getLastName();
        }

        public function getApellidoMaterno()
        {
                return $this->apellidoMaterno;
        }

        public function setApellidoMaterno($apellidoMaterno)
        {
            $this->apellidoMaterno = $apellidoMaterno;
        }

    }

    // clase hija
    class Mexicano extends Persona{
        private $colonia;
        private $curp;
        private $estado;

        public function getColonia()
        {
            return $this->colonia;
        }

        public function setColonia($colonia)
        {
            $this->colonia = $colonia;

        }

        public function getCurp()
        {
            return $this->curp;
        }

        public function setCurp($curp)
        {
            $this->curp = $curp;
        }

        public function getEstado()
        {
            return $this->estado;
        }

        public function setEstado($estado)
        {
            $this->estado = $estado;
        }

        public function saludar(){
            echo "Que ondas carnal, soy " . $this->getName() . " " . $this->getLastName();
        }

    }

    // $luis = new Colombiano;
    // $luis->setName('Luis');
    // $luis->setLastName('Paredes');
    // echo $luis->saludar();
    // echo "<hr>";
    // $miguel = new Mexicano;
    // $miguel->setEmail('developer.chuil@gmail.com');
    // $miguel->setName('Miguel');
    // $miguel->setLastName('Chuil');
    // echo $miguel->saludar();
    // echo $miguel->getEmail();

    // echo "<hr>";
    // $persona = new Persona;
    // $persona->setName('James');
    // $persona->setLastName('Bond');
    // $persona->saludar();


    $sandra = new Colombiano('Sandra', 'Villamizar', 'Suarez');
    echo $sandra->getName();
    echo "<br>";
    echo $sandra->getLastName();
    echo "<br>";
    echo $sandra->getApellidoMaterno();