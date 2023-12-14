<?php 

    class BankAccount{
        private $holder;
        private $accountNumber;
        private $balance;
        private $peso;

        public function __construct($holder, $accountNumber, $balance = 0)
        {
            $this->holder = $holder;
            $this->accountNumber = $accountNumber;
            $this->balance = $balance;
        }   

        public function getHolder()
        {
            return $this->holder;
        }

        public function setHolder($holder)
        {
            $this->holder = $holder;
        }

        public function getAccountNumber()
        {
            return $this->accountNumber;
        }

        public function setAccountNumber($accountNumber)
        {
            $this->accountNumber = $accountNumber;
        }

        public function getBalance()
        {
            return $this->balance;
        }

        public function setBalance($balance)
        {
            $this->balance = $balance;
        }

        public function toString(){
            echo "<p>Titular de la cuenta: $this->holder </p>";
            echo "<p>Número de cuenta: $this->accountNumber </p>";
            echo "<p>Sáldo actual: $" . number_format($this->balance, 2) . "</p>";
        }

        public function toDeposit($quantity){
            if($quantity > 0 ){
                // $this->balance = $this->balance + $quantity;
                $this->balance += $quantity;
            }
        }

        public function withdraw($quantity){
            if($quantity > $this->balance){
                echo "Saldo insuficiente...";
            }else{
                // $this->balance = $this->balance - $quantity;
                $this->balance -= $quantity;
            }
        }
    }
