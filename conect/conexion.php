<?php
$server="localhost";
$db="sis_ti";
$user="root";
$password="root";

try {
    $conexion = new pdo("mysql:host=$server;dbname=$db", $user, $password);
  //  echo "conectado";
}
catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
}

