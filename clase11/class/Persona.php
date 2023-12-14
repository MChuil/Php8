<?php 

    class Persona{
        private $name;
        private $email;
        private $phone;

        public function __construct($name, $email = '')
        {
            $this->name = $name;
            $this->email = $email;
            echo "Hola {$this->name}, bienvenido...";
        }

        //SETTER Y GETTER----------------------
        public function setName($name){
            $this->name = strtolower($name);
        }

        public function getName(){
            return ucwords($this->name);
        }

        public function setEmail($email){
            $this->email = strtolower($email);
        }

        public function getEmail(){
            return $this->email;
        }

        public function setPhone($phone){
            if(is_int($phone)){ //si es un numero entero
                $this->phone = $phone;
            }
        }

        public function getPhone(){
            return $this->phone;
        }
    }

    class Reloj{
        public $hour;
        public $minute;
        public $seconds;

        public function __construct()
        {
            echo date('H:i:s');
        }

    }

    class Calendario{
        public $day;
        public $month;
        public $year;

    }


    $miguel = new Persona('Miguel');
    echo "<br>";
    //$miguel->phone = "9661012323erer";
    $miguel->setPhone(9661012323);
    // $miguel->email = "MIGUEL@TEST.COM";
    $miguel->setEmail("MIGUEL@TEST.COM");
    //$miguel->name = "jUaN mENdoZa";
    $miguel->setName("jUaN mENdoZa");
    echo $miguel->getName();
    echo "<br>";
    echo $miguel->getEmail();
    echo "<br>";
    echo $miguel->getPhone();
    // $reloj = new Reloj;