<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "gestion_universite";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Echec de la connection a la base de donnée ". mysqli_connect_error());
}else


?>

