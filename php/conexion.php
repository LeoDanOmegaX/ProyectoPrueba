<?php
$host = "127.0.0.1:3307";
$usuario = "root";
$pw = "";
$baseDatos = "Prueba1";
$tabla = "Usuario"; 

$cnn = mysqli_connect($host, $usuario, $pw, $baseDatos)
//if (!mysqli_query($cnn, "CREATE TABLE " . $tabla . "(id int, nombre varchar(25),contra varchar(25))")) 



?>