<?php 

include("con_db.php");

if (isset($_POST['register'])){
    $dni = trim($_POST["dni"]);
    $nombre = trim($_POST["nombre"]);
    $apellidos  = trim($_POST["apellidos"]);
    $telefono = trim($_POST["telefono"]);
    $fecha_nacimiento = trim($_POST["fechanacimiento"]);
    $email = trim($_POST["email"]);
    $usuario = trim($_POST["usuario"]);
    $contraseña = trim($_POST["contraseña"]);

    $consulta = "INSERT INTO usuarios(DNI, nombre, apellidos, telefono, fecha_nacimiento, email, usuario, contraseña) VALUES ('$dni','$nombre', '$apellidos','$telefono','$fecha_nacimiento','$email','$usuario','$contraseña')";
    $resultado = mysqli_query($conn, $consulta);

    if($resultado){
        ?>  
            
        <h3 class="ok" >!Te has registrado correctamente!</h3>
        
        <?php

    }
        else{

            ?>  
        
            <h3 class="bad" >!Ha ocurrido un error!</h3>
        
            <?php 

        }

}

?>