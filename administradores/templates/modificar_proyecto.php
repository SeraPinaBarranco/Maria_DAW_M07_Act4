<?php


$id = $_GET['id'];
$query = "SELECT * FROM proyecto WHERE id = $id";

require_once "../../model/conection.php";

$result = consulta2($query);

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
    <header><h1>Modificar proyecto</h1></header>

    <section>
        <!-- <form action="/*<?php echo $_SERVER['PHP_SELF']; ?>*/" method="post" > -->
        <form action="../modificar.php" method="post" >

            <?php 
                while($resultado = mysqli_fetch_array($result)){
            ?>
            <input type="hidden" name="id" value="<?php echo $resultado['id'] ?>">
            Nombre del proyecto: <input type="text" name="nombre" id="nombre" value="<?php echo $resultado['nombre'] ?>">
             
            <?php } ?>
            <input type="hidden" name="tabla" value="proyecto">
            <div>
                <input type="submit" value="Guardar" name="guardar">         

            </div>
            
        </form>
    </section>
    
</body>
</html>