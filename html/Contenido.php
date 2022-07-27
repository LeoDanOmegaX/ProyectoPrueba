<?php
session_start();
$usuario = $_SESSION['username'];
if(!isset($usuario)){
    header("location: ../index.html");
}else{


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="../imagen/libros.png" type="image/jpeg">
        <title>Sistema de Almacenamiento de Libros</title>
        <link rel="stylesheet" href="../css/Contenido.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
-->
        <script language="JavaScript" type="text/javascript" src="../js/jquery3.js"></script>
        <script language="JavaScript" type="text/javascript" src="../js/jquery331.js"></script>
        <script language="JavaScript" type="text/javascript" src="../js/alerta.js"></script>
        
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript">
            
            
            
        
        </script>
    </head>
    

    <body>
        <section class="inicio__menu">
                    <div class="inicio__logo">
                        <img src="../imagen/libros.png">
                        <h3>Sistema CRUD de libros</h3>
                    </div>
                    <nav class="menuCSS3">
                        <ul>
                            <li class="inicio__opcion"><a><?php echo "Bienvenido $usuario"; ?></a><span></span><span></span></li>
                            
                            <li class="inicio__opcion"><a href="../php/cerrarSesion.php">Cerrar Sesión</a><span></span>
                        </ul>
                        </nav>
		</section>
        <section class="tab">

            <h2>Libros para su recomendación</h2>

                <section class="col-md-12">
                    <table class="table table-hover table-bordered border-secondary m-0" id="table">
                        <thead>
                        <tr class="table table-dark">
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Terminado</th>
                        </tr>
                        </thead>
                    </table>
                </section>
                <table id="tabla" >
            </table>
               

        </section>
        
    </body>     
</html>

<?php
}
?>