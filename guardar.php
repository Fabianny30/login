<?php

    $con = mysqli_connect("localhost:3308", "root", "", "datos");
            if (mysqli_connect_errno()) {
                echo "No se pudo conectar a la base de datos" . mysqli_connect_error();

            }

    $nombre = mysqli_real_escape_string($con, $_POST["nombre"]);
    $correo = mysqli_real_escape_string($con, $_POST["correo"]);
    $mensaje = mysqli_real_escape_string($con, $_POST["mensaje"]);
    
    
  
  
  
    $sql = "INSERT INTO datos VALUES ('$nombre', '$correo', '$mensaje')";

    if (!mysqli_query($con, $sql)) {
            die('Error: ' . mysqli_error($con));
       } else {

         
               echo "Registro guardado exitosamente<br><a href='index.html'>Volver</a>";
          }
?>