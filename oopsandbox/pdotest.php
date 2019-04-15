<?php
$host = 'localhost';
$user = 'root';
$password = '123456';
$dbname = 'pdotest';

// SET DSN

$dsn = 'mysql:host='. $host . ';dbname=' . $dbname;

// Create a PDO instance

$pdo = new PDO($dsn, $user, $password);

echo 'hej';