<?php
require __DIR__ . '/../vendor/autoload.php';
$pathToEnvFile = __DIR__ . '/../.env.testing';

if (file_exists($pathToEnvFile)) {
    $dotenv = Dotenv\Dotenv::createMutable(__DIR__ . '/../' , '.env.testing');
    $dotenv->load();
}