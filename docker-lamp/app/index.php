

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-index.css">
    <title>Registro de usuario</title>
</head>
<body>

    <div class="caja-login">
        <h1>Iniciar sesión</h1>
        <form method="post">
            <!--nombre de usuario-->
            <label for="usuario">Usuario</label>
            <input type="text" name = "usuario" placeholder="Introducir usuario">

            <!--constraseña-->
            <label for="contraseña">Contraseña</label>
            <input type="password" name = "contraseña" placeholder="Introducir constraseña">

            <!--botón iniciar sesión-->
            <input type="submit" name = "login" value="Iniciar sesión">

            <a href="#">¿Has olvidado tu contraseña?</a><br>
            <a href="registro.php">¿No tienes una cuenta? ¡Regístrate!</a>
        </form>
        <?php   
        
        include("login.php");
        
        ?>
    </div>

</body>
</html>