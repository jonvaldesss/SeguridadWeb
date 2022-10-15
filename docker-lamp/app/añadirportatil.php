<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-registro.css">
    <title>Añadir</title>
</head>
<body>
    <!-- registro -->

    <div class="caja-añadir">
        <h1>Añadir</h1>
        <form method = "post">
            <!--marca-->
            <label for="marca">Marca</label>
            <input type="text" name="marca" placeholder="Introduzca la marca">

            <!--modelo-->
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" placeholder="Introduzca el modelo">

            <!--cpu-->
            <label for="cpu">CPU</label>
            <input type="text" name="cpu" placeholder="Introduzca la CPU">

            <!--gpu-->
            <label for="gpu">GPU</label>
            <input type="text" name="gpu" placeholder="Introduzca la GPU">           

            <!--ram-->
            <label for="ram">RAM</label>
            <input type="text" name="ram" placeholder="Introduzca la RAM">

            <!--botón enviar-->
            <input type="submit" name="añadir" value="Añadir Portátil">
        </form>
                
        <?php   
 
        include("con_db.php");

        if (isset($_POST['añadir'])){
            $marca = trim($_POST["marca"]);
            $modelo = trim($_POST["modelo"]);
            $cpu  = trim($_POST["cpu"]);
            $gpu = trim($_POST["gpu"]);
            $ram = trim($_POST["ram"]);
 
            $consulta = "INSERT INTO portatiles(marca, modelo, cpu, gpu, ram) VALUES ('$marca','$modelo','$cpu','$gpu','$ram')";
            $resultado = mysqli_query($conn, $consulta);
 
            if($resultado){
                ?>  
             
                    <h3 class="ok" >!El portatil se ha añadido correctamente!</h3>
         
                <?php
 
        }
        else{
 
                ?>  
         
                    <h3 class="bad" >!Ha ocurrido un error!</h3>
         
                <?php 
 
        }
 
        }

        ?>

    </div>
</body>
</html>