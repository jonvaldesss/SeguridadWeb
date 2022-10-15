<?php 
include("con_db.php");
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-registro.css">
    <title>Modificar</title>
</head>
<body>
    <!-- Modificar -->

    <div class="caja-login">
        <h1>Modificar</h1>
        <form method = "post">
            <!--nombre-->
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="Introducir nombre">

            <!--apellidos-->
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" placeholder="Introducir apellidos">

            <!--DNI-->
            <label for="dni">DNI</label>
            <input type="text" name="dni" placeholder="Introducir DNI" pattern="[0-9]{8}[A-Za-z]{1}" title="Debe poner 8 números y una letra">           

            <!--Telefono-->
            <label for="telefono">Teléfono</label>
            <input type="tel" name="telefono" placeholder="Introducir teléfono">

            <!--fecha nacimiento-->
            <label for="fechanacimiento">Fecha de nacimiento</label>
            <input type="date" name="fechanacimiento">

            <!--Email-->
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Introducir email">

            
            <!--constraseña-->
            <label for="contraseña">Contraseña</label>
            <input type="password" name="contraseña" placeholder="Introducir constraseña">

            <!--botón enviar-->
            <input type="submit" name="register" value="Modificar">
        </form>
                
        <?php   
        if (isset($_POST['register'])){
        $usuario = $_SESSION["usuario"];
        $dni = trim($_POST["dni"]);
        $nombre = trim($_POST["nombre"]);
        $apellidos  = trim($_POST["apellidos"]);
        $telefono = trim($_POST["telefono"]);
        $fecha_nacimiento = trim($_POST["fechanacimiento"]);
        $email = trim($_POST["email"]);
        $contraseña = trim($_POST["contraseña"]);
 
        $consulta = "UPDATE usuarios SET DNI='$dni',nombre='$nombre',apellidos='$apellidos',telefono='$telefono',fecha_nacimiento='$fecha_nacimiento',email='$email',contraseña='$contraseña' WHERE usuario='$usuario'";
        $resultado = mysqli_query($conn, $consulta);
 
        if($resultado){
            ?>  
             
                <h3 class="ok" >!Los datos se han modificado correctamente!</h3>
         
            <?php
 
        }
        else{
 
            ?>  
         
                <h3 class="bad" >!Ha ocurrido un error!</h3>
         
            <?php 
 
        }
    }

        ?>

    </div>
</body>
</html>
