<?php 

    class MyClass {

        public $myPublic = "Soy un atributo Publico";
        protected $myProtected = "Soy un atributo protegido";
        private $miPrivate = "Soy un atributo privado";

        public function myFunctionPublic(){
            // Se pueden pueden utilizar desde fuera de la clase despues de haber creado el objeto
            echo "Soy un metodo publico";
        }

        protected function myFunctionProtected(){
            // Solo se puede utilizar en la misma clase y en las clases hijas
        }

        private function myFunctionPrivate(){
            // Solo son de uso de la clase que los creo, NO se heredan
        }

    }

    class MyClassTwo extends MyClass{

        public function __construct()
        {
            echo $this->myProtected;
        }
    }

    $myClass = new MyClass;
    echo $myClass->myPublic;
    echo "<hr>";
    $myClass->myFunctionPublic();
    echo "<hr>";

    $myClassTwo = new MyClassTwo; 

