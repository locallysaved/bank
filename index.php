<?php
require_once "BankAccount.php";

$d1 = new BankAccount('dihhh 1', 1522222);
$d2 = new BankAccount('dih 2', 1);

$d1->deposit(50);
$d1->withdraw(30);
$d1->withdraw(6);
$d2->deposit(1);
$d2->withdraw(12);


$d1->printInfo();
$d2->printInfo();