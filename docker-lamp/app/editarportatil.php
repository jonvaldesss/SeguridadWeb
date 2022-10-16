<?php
    session_start();
    include("con_db.php");
    $id_portatil = $_GET["id_portatil"];
    $consulta = "SELECT * FROM portatiles WHERE id_portatil= '$id_portatil'";

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Portátil</title>
    <link rel="stylesheet" href="estiloseditarportatil.css">
</head>
<body>

    <div class="caja-modificar">
        <form method="post">
            <!--botón modificar-->
            <a href="bienvenidos.php">Datos del usuario</a>
        </form>
       
    </div>

    <div class="caja-añadir">
        <form method="post">
            <!--botón añadir-->
            <a href="añadirportatil.php">Añadir Portátil</a>    
        </form>
       
    </div>

    <form class="container-table container--table--edit" action="modificarportatil.php" method="post">
     <div class="table__title table__title--edit">Portátiles <a href="añadirportatil.php" class="title_edit">Añadir Portátil</a> </div>
     
        <div class="table__header">Marca</div>
        <div class="table__header">Modelo</div>
        <div class="table__header">CPU</div>
        <div class="table__header">GPU</div>
        <div class="table__header">RAM</div>
        <div class="table__header">Operacion</div>
        
        
    
        <?php $resultado = mysqli_query($conn, $consulta);
            while($row=mysqli_fetch_assoc($resultado)) { ?>
            <input type="hidden" class="table__item" value="<?php echo $row["id_portatil"];?>" name="id_portatil">
            <input type="text" class="table__item" value="<?php echo $row["marca"];?>" name="marca">
            <input type="text" class="table__item" value="<?php echo $row["modelo"];?>" name="modelo">
            <input type="text" class="table__item" value="<?php echo $row["gpu"];?>" name="gpu">
            <input type="text" class="table__item" value="<?php echo $row["cpu"];?>" name="cpu">
            <input type="text" class="table__item" value="<?php echo $row["ram"];?>" name="ram">
            <div class="table__item">
                <input type="submit" name="register" value="Modificar">
            </div> 
               
            
            <?php } mysqli_free_result($resultado);?>
           
            
        

            <!-- 
            <a href="" >Editar</a> 
            <a href="" >Eliminar</a>  -->
    </form>

</body>





</html>