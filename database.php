<?php

session_start();

$server = 'localhost';
$username = 'root';
$password = 'TheDarkProdigy78'; //Aquí va la contraseña de su servidor
$database = 'login_database'; /* cambie por el nombre de su BD debe ser creada la tabla con 
los siguientes datos 1.- ID tipo INT con un autoincrement Primary 2.- email tipo varchar de 200 3.-password tipo
varchar de 200     */

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>