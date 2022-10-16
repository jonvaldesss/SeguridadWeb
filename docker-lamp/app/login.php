<?php   
ob_start();
include("con_db.php");
      session_start();
     $_SESSION["usuario"];
     if (isset($_POST['login'])) {
        if(!empty($_POST['usuario']) && !empty($_POST['contraseña'])){
            $usuario = trim($_POST["usuario"]);
            $contraseña = trim($_POST["contraseña"]);

    
     $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contraseña'";
     $resultado = mysqli_query($conn, $consulta);
     $row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);   
     $count = mysqli_num_rows($resultado);  
    

     if($count==1){
         
        $_SESSION["usuario"] = $usuario;
        ?>
        echo <script>window.location="paginaprincipal.php"</script>;
        <?php
        }
         else{

             ?>  
        
             <script>alert('Ha ocurrido un error');window.location='index.php'</script>
        
             <?php 

         }
        

    }
}

?>
