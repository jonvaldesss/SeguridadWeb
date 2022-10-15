<?php
    session_start();
    include("con_db.php");
    $usuario = $_SESSION["usuario"];

    $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario'";
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIENVENIDOS</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container-table container--table--edit">
     <div class="table__title table__title--edit">Datos de usuario</div>
     
        <div class="table__header">DNI</div>
        <div class="table__header">Nombre</div>
        <div class="table__header">Apellidos</div>
        <div class="table__header">Telefono</div>
        <div class="table__header">Email</div>
        <div class="table__header">Usuario</div>
        <div class="table__header">Contraseña</div>
        <div class="table__header">Operación</div>
      
        

    
        <?php $resultado = mysqli_query($conn, $consulta);
            while($row=mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__item"><?php echo $row["DNI"];?></div> 
            <div class="table__item"><?php echo $row["nombre"];?></div> 
            <div class="table__item"><?php echo $row["apellidos"];?></div> 
            <div class="table__item"><?php echo $row["telefono"];?></div> 
            <div class="table__item"><?php echo $row["email"];?></div> 
            <div class="table__item"><?php echo $row["usuario"];?></div> 
            <div class="table__item"><?php echo $row["contraseña"];?></div> 
            <div class="table__item">
                <a href="modificarusuario.php" class="table__item__link">Editar</a>
            </div> 
           <?php } mysqli_free_result($resultado);?>
    </div>

</body>
</html>