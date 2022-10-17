<?php
require_once __DIR__. '/vendor/autoload.php';


$customer = new \Programmer\Belajar\Customer("Fikri");
echo $customer->sayHello("Rina").PHP_EOL;
echo $customer->sayHello().PHP_EOL;