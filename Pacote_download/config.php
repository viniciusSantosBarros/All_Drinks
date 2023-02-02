<?php

$dbName = 'adega_bebidas';
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '1234';

$pdo = new PDO ("mysql:dbname=".$dbName.";host=".$dbHost, $dbUser, $dbPassword);

