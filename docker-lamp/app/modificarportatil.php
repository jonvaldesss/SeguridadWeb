<?php   
 
 include("con_db.php");
 session_start();
    
 if (isset($_POST['register'])){
        $id_portatil = $_POST["id_portatil"];
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $cpu = $_POST["cpu"];
        $gpu  = $_POST["gpu"];
        $ram = $_POST["ram"];
       
 
        $consulta = "UPDATE portatiles SET marca='$marca',modelo='$modelo',cpu='$cpu',gpu='$gpu',ram='$ram' WHERE id_portatil='$id_portatil'";
        $resultado = mysqli_query($conn, $consulta);
 
        if($resultado){
            ?>  
             
             <h3 class="ok" >!Se han actualizado los datos del portátil correctamente!</h3>
             <div class="table__item">
                <a href="paginaprincipal.php" class="table__item__link">ACTUALIZAR</a>|
                
            </div> 


            <?php
 
        }
        else{
 
            ?>  
         
                <h3 class="bad" >!Ha ocurrido un error!</h3>
         
            <?php 
 
        }
    
    }
        ?>
 

 

 ?>