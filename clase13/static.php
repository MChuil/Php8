<?php 

    class MyClass{

        public static $myAttribute;
        public $myAttributeTwo;

        public function saludar(){
            echo "Hola Mundo...";
        }

        public static function hello(){
            echo "Hello My Friends";
        }
    }

    $one = new MyClass; //instancia de la clase
    $one->myAttributeTwo = "PHP 8";
    $one->saludar();
    echo "<hr>";
    MyClass::hello();
    MyClass::$myAttribute = "MySql";
