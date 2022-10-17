<?php
require_once __DIR__. '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


$log = new Logger("Fikri");
$log->pushHandler(new StreamHandler("application.log", Logger::INFO));

$log->info("Hello Word");
$log->info("Belajar PHP Composer");