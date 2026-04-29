<?php

class Bank {
    private $balance =0 ;

    public function deposit($amount) {
        $this->balance += $amount;


    
}

public function getBalance(){
    return $this->balance;

}

}

$account = new Bank();
$account->deposit(100);
echo "Current Balance: " . $account->getBalance();  

?>