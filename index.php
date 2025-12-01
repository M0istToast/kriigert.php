<?php

require_once "BankAccount.php";

$jerry = new BankAccount("jerry", 123);

$deposit = deposit("maui",2);

$jerry->printinfo();
?>