<?php
require_once "formulario.php";
require_once "conectar.php";


$dni=$_POST['dni'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$fechaalta=$_POST['fechaalta'];


//no consigo que funciona la validación del DNI

//$con = new conectar();
//$conexion=$con->conexion();

//$dni = 'SELECT * FROM `socio` WHERE `dni` LIKE `$dni`';

//if(mysqli_num_rows($dni)>=1)
//{
//    header('Location: repetido.php');
//}  




    if ($dni != "" ) {
        if ($nombre !="") {
            if ($apellidos != "") {
                if ($fechaalta != "") {
                    $con = new conectar();
                    $conexion=$con->conexion();

                    $sql= "INSERT INTO `socio`(`dni`, `nombre`, `apellidos`, `fechaalta`) VALUES ('$dni','$nombre','$apellidos','$fechaalta')";

                    $resultado=mysqli_query($conexion,$sql);

                    header('Location: correcto.php');
                }
                else {
                        
                    echo '<br><br><div style= "padding: 25px ; border-style: double;"> <span class="error">Debe introducir una fecha de alta.</span> </div>';
                        
                }
                
            }else {
                    
                echo '<br><div style= "padding: 25px ; border-style: double;"> <span class="error">Debe introducir un apellido.</span> </div>';
            }
        } else {
                    
            echo '<br><div style= "padding: 25px ; border-style: double;"> <span class="error">Debe introducir un nombre.</span> </div>';
        }
    } else {
                    
        echo '<br><div style= "padding: 25px ; border-style: double;">  <span class="error">Debe introducir un dni.</span> </div>';
    }

    $conexion->close();
?>