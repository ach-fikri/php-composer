<?php
require_once __DIR__. '/vendor/autoload.php';

use Programmer\Data\People;

$people = new People("Fikri");

echo $people->sayHello("Rina") . PHP_EOL;