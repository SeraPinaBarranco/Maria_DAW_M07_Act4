<?php

require_once "../../model/conection.php";


$id = $_GET['id'];

$query = "SELECT nombre, pass, tipo_usuario FROM usuario WHERE id= $id";

$resultado = consulta2($query);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar usuario</title>
</head>
<body>  

<header><h1>Modificar usuario</h1></header>

    <section>
        
        

        <form action="../modificar.php" method="post" >

        <?php
        while($result = mysqli_fetch_array($resultado)){
            
        ?>
        

            Nombre: <input type="text" name="nombre" id="nombre" value="<?php echo  $result['nombre']; ?>">
            <div style="margin-top: 2vh; margin-bottom: 2vh;">
                Password: <input type="text" name="pass" id="pass" value="<?php echo  $result['pass']; ?>"><br>
                Re-Password: <input type="text" name="repass" id="repass">
            </div>
            Tipo-usuario: 
            <select name="tipo" id="tipo" style="margin-bottom: 2vh;" >
                <option value="0">Administrador</option>
                <option value="1">Usuario</option>
            </select>
            <input type="hidden" name="id" value="<?php echo  $id; ?>">
            <div>
                <input type="submit" value="Guardar" name="guardar">                
            </div>
        <?php } ?>
        </form>
    </section>
    
</body>
</html>