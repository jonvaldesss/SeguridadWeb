<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    $nombreapellidos = trim($_POST["nombreapellidos"]);
    $dni = trim($_POST["dni"]);
    $telefono = trim($_POST["telefono"]);
    $fecha_nacimiento = trim($_POST["trip-start"]);
    $email = trim($_POST["email"]);
    $usuario = trim($_POST["usuario"]);
    $contraseña = trim($_POST["contraseña"]);

    $consulta = "INSERT INTO usuarios(DNI, nombre_apellidos, telefono, fecha_nacimiento, email, usuario, contraseña) VALUES ('$nombreapellidos','$dni','$telefono','$fecha_nacimiento','$email','$usuario','$contraseña')";
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