<?php

// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "wwproject_c0_pl";

$host = "mysql.cba.pl";
$user = "wwproject.c0.pl";
$password = "Previad4d2006";
$dbname = "wwproject_c0_pl";

// SET DSN - DATA SOURCE NAME

$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

// CREATE PDO INSTANCE

try {

  $dbc = new PDO($dsn, $user, $password, [
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  ]);

}catch(PDOException $e){

  exit();

}
