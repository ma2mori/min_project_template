<?php
require_once(__DIR__.'/vendor/autoload.php');
use Dotenv\Dotenv;
use Classes\SubClass;

$env = Dotenv::createImmutable(__DIR__)->load();
$g = new SubClass();

// echo $_ENV['TEST_ENV'];
echo $g->test;