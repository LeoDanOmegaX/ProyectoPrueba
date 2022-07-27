<?php
require 'conexion.php';
session_start();

$usuario =  $_POST['usuario'];
$pass = $_POST['contra'];

$sql = "SELECT COUNT(*) as total from usuario where Nombre = '$usuario' and Contra = '$pass'";
$verificar = mysqli_query($cnn, $sql);
$fila=mysqli_fetch_array($verificar);
if ($fila['total'] > 0){
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $usuario;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
    header("Location: ../html/Contenido.php");
}else{
    header("Location: ../index.html");
}

?>