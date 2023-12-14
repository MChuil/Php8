<?php 
    require_once 'BankAccount.php';

    class CuentaCorriente extends BankAccount{
        private $noChequera;
        private $comision;
        private $nit;
    }