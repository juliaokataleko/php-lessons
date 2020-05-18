<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "pdo_lesson";

// Set DSN
$dsn = 'mysql:host='.$host.';dbname='.$dbname;

global $pdo;

// Create PDO instance
try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (\Throwable $th) {
    //throw $th;
}