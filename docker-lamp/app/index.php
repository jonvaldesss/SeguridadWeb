

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
</head>
<body>
    <h1>Registro de usuarios</h1>

        <form method = "post">
            <p>Usuario: <input type="text" name="usuario" placeholder="Introduzca su nombre de usuario"></p>
            <p>Contraseña: <input type="password" name="contraseña" placeholder="Introduzca su contraseña"></p>
            <p>Nombre y apellidos: <input type="text" name="nombreapellidos" placeholder="Introduzca su nombre completo"></p>
            <p>DNI: <input type="text" name="dni" placeholder="Introduzca su DNI" pattern="[0-9]{8}[A-Za-z]{1}" title="Debe poner 8 números y una letra" /></p>
            <p>Teléfono: <input type="tel" name="telefono" placeholder="Introduzca su número de teléfono"></p>
            <p>Fecha de nacimiento: <input type="date" id="start" name="trip-start" value="2018-07-22"></p>
            <p>Email: <input type="email" name="email" placeholder="Ej.: usuario@servidor.com"></p>
            <input type="submit" name="register" value="Enviar">
            
        </form>

        <?php   
        
        include("registrar.php");
        
        ?>




        <form method="post">
            <div class="form-element">
                <label>Usuario</label>
                <input type="text" name="usuario1" pattern="[a-zA-Z0-9]+" required />
            </div>
            <div class="form-element">
                <label>Contraseña</label>
                <input type="password" name="contraseña1" required />
            </div>
            <input type="submit" name="login" value="login">
        </form>

        <?php   
        
        include("login.php");
        
        ?>

</body>
</html>