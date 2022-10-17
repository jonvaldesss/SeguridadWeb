<?php
    session_start();
    include("con_db.php");

    $consulta = "SELECT * FROM portatiles";

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catologo Portátiles</title>
    <link rel="stylesheet" href="style-paginaprincipal.css">
</head>
<body>

    <header class="header">
      <nav class="nav">
        <a href="#" class="logo nav-link"><img src="images/logotoplap.PNG"></a>
        <button class="nav-toggle" aria-label="Abrir menú">
          <i class="fas fa-bars"></i>
        </button>
        <ul class="nav-menu">
          <li class="nav-menu-item">
            <a href="paginaprincipal.php" class="nav-menu-link nav-link">Página principal</a>
          </li>
          <li class="nav-menu-item">
            <a href="añadirportatil.php" class="nav-menu-link nav-link">Añadir portatil</a>
          </li>
          <li class="nav-menu-item">
            <a href="bienvenidos.php" class="nav-menu-link nav-link">Usuario</a>
          </li>
          <li class="nav-menu-item">
            <a href="index.php" class="nav-menu-link nav-link">Cerrar sesión</a>
          </li>
        </ul>
      </nav>
    </header>


    <div class="container-table container--table--edit">
     <div class="table__title table__title--edit">Portátiles</div>
     
        <div class="table__header">Marca</div>
        <div class="table__header">Modelo</div>
        <div class="table__header">CPU</div>
        <div class="table__header">GPU</div>
        <div class="table__header">RAM</div>
        <div class="table__header"></div>
    
        <?php $resultado = mysqli_query($conn, $consulta);
            while($row=mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__item"><?php echo $row["marca"];?></div> 
            <div class="table__item"><?php echo $row["modelo"];?></div> 
            <div class="table__item"><?php echo $row["gpu"];?></div> 
            <div class="table__item"><?php echo $row["cpu"];?></div> 
            <div class="table__item"><?php echo $row["ram"];?></div> 
            <div class="table__item">
                <a href="editarportatil.php?id_portatil=<?php echo $row["id_portatil"];?>" class="table__item_link">Editar</a>  | 
                <a href="eliminarportatil.php?id_portatil=<?php echo $row["id_portatil"];?>" class="table__item__link">Eliminar</a>
            </div> 
            <?php } mysqli_free_result($resultado);?>
        </div> 

            <!-- 
            <a href="" >Editar</a> 
            <a href="" >Eliminar</a>  -->
 </div>
                <script src="confirmacioneliminacion.js"></script>
</body>
</html>