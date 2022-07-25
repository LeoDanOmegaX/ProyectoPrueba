<?php
require 'conexion.php';
session_start();

$usuario =  $_POST['usuario'];
$pass = $_POST['contra'];

$sql = "SELECT COUNT(*) from usuario where nombre = 'usuario' and contra = 'pass';";
$verificar = mysqli_query($conn, $sql);
$lista = mysqli_fetch_array($verificar);

?>