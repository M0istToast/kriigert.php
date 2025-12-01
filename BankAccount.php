<?php

class BankAccount{

public $owner;
private $balance;

public function __construct($owner, $balance){

    $this->owner = $owner;
    $this->balance = $balance;
}

    function deposit($ammount){
        if ($ammount > 0){
            $this->balance += $ammount;
            return true;
        }
        return false;
    }

   function withdraw($amount){
    if ($ammount > 0 && $ammount <= $this->balance) {
        $this->balance -= $ammount;
        return true;
    }
    return false;
   }

   function printinfo(){
       echo "Owner: ". $this->owner . "<br>";
       echo "Balance: ". number_format($this->balance, 2) . "<br>";
   }
    
}


?>