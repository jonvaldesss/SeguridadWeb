<?php   

include("con_db.php");

if (isset($_POST['login'])) {
    if(!empty($_POST['usuario1']) && !empty($_POST['contraseña1'])){


    $usuario = trim($_POST["usuario1"]);
    $contraseña = trim($_POST["contraseña1"]);

    $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contraseña'";
    $resultado = mysqli_query($conn, $consulta);
    $row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);   
    $count = mysqli_num_rows($resultado);  
    

    if($count==1){
        
        session_register("usuario");
        $_SESSION["login_user"] = $usuario;
        header("location: con_db.php");

    }
        else{

            ?>  
        
            <h3 class="bad" >!Usuario o contraseña incorrecta!</h3>
        
            <?php 

        }
    }
}

?>