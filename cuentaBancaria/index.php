<?php 
    require_once 'class/BankAccount.php';

    $accountOne = new BankAccount('Miguel Martinez', '1234567890');
    $accountOne->toDeposit(10000000);
    $accountOne->toDeposit(5000000);

    $accountTwo = new BankAccount('Daniel Martinez', '9876543210', 5000000);
    $accountTwo->withdraw(2200000);
    
    $accountOne->toString();
    echo "<hr>";
    $accountTwo->withdraw(3000000);
    $accountTwo->toString();