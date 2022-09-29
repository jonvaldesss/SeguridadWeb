<?php   

include("con_db.php");

if (isset($_POST['login'])) {
    if(!empty($_POST['usuario']) && !empty($_POST['contraseña'])){

    $usuario = trim($_POST["usuario"]);
    $contraseña = trim($_POST["contraseña"]);

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