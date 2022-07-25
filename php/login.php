<?php
require 'conexion.php';
session_start();

$usuario =  $_POST['usuario'];
$pass = $_POST['contra'];

$sql = "SELECT * from usuario where Nombre = '$usuario' and Contra = '$pass'";
$verificar = mysqli_query($conn, $sql);
$query->bindParam("usuario", $usuario, PDO::PARAM_STR);
$query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['PASSWORD'])) {
            $_SESSION['user_id'] = $result['ID'];
            echo '<p class="success">Congratulations, you are logged in!</p>';
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
while($fila = mysqli_fetch_array($verificar)){
    if()
}

?>