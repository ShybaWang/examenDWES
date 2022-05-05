<?php


?>
<!DOCTYPE HTML>
    <html>
        
        <head>
            <title>Agregar socios</title>
        </head>
        
        <body> 
            <h2 style= "color: blue;">Registro socios</h2>
            <fieldset>
                <legend>Datos personales</legend>

                <form id="formulario" action="validar.php" method="post">
                        
                    <label for="dni">DNI: </label> 
                    <p><input type="text" id="dni" name="dni"><br>
                    <label for="nombre">Nombre:  </label>
                    <p><input type="text" id="nombre" name="nombre"><br>
                    <label for="apellidos">Apellidos:  </label>
                    <p><input type="text" id="apellidos" name="apellidos"><br>
                    <label for="fechaalta">Fecha de nacimiento:  </label>
                    <p><input type="date" id="fechaalta" name="fechaalta"><br>
                    <br>
                    <br>
                </fieldset>
                    <input type="submit" value="Enviar" />
                </form>
            

            <br><a href= "listar.php">ver socios registrados.</a>
        </body>
            
    </html>