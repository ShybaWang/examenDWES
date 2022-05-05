<?php

require_once "conectar.php";

//conectamos el servidor
$con = new conectar();
$conexion=$con->conexion();

//hacemos la consulta
$datos = 'SELECT dni,nombre,apellidos,fechaalta FROM socio';
$resultado=mysqli_query($conexion,$datos);

//no me da tiempo a formatear la salida en una tabla.

    foreach ($resultado as $key) {
        echo "<p>" . $key["dni"] . "</p>" .
        "<p>" . $key["nombre"] . "</p>" .
        "<p>" . $key["apellidos"] . "</p>" .
        "<p>" . $key["fechaalta"] . "</p>" .
        "<br>";
    }

    
$conexion->close();
?>

<!DOCTYPE HTML>
    <html>
        
        <head>
            <title>Agenda</title> 
        </head>
        
        <body>

        <a href="formulario.php">Registro de socios</a>

            


        </body>

            
    </html>
