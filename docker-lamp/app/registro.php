<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-registro.css">
    <title>TÍTULO</title>
</head>
<body>
    <!-- registro -->

    <div class="caja-login">
        <h1>Registro</h1>
        <form method = "post">
            <!--nombre de usuario-->
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" placeholder="Introducir usuario">

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
            <input type="submit" name="register" value="Registrar">
        </form>
                
        <?php   
 
        include("registrar.php");

        ?>

    </div>
</body>
</html>