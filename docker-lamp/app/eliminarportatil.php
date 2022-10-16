<?php
    session_start();
    include("con_db.php");
    $id_portatil = $_GET["id_portatil"];
    $consulta = "DELETE FROM portatiles WHERE id_portatil= '$id_portatil'";

    $resultado = mysqli_query($conn, $consulta);


if($resultado){
           
    header("Location: portatiles.php");
        }
        else{
 
            ?>  
         
                <h3 class="bad" >!Ha ocurrido un error!</h3>
         
            <?php 
 
        }

    ?>