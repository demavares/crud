<?php
/* Cambiar el password y el nombre de la base de datos para su conexión */
$server   = "localhost";
$username = "root";
$password = "123456";
$database = "pruebas";

$mysqli = new mysqli($server, $username, $password, $database);

if ($mysqli->connect_error) {
    die('error'.$mysqli->connect_error);
}
?>

<!-- DESARROLLADO POR:
[Ing. Darwin Mavares] ©2022.
Telefono: +58.0414.3601706 / E-mail: darwinmavares@gmail.com
Venezuela.
Vulgarmente autodidacta
-->
