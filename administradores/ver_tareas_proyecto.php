<?php
$id = $_GET['proyecto'];

$query = "SELECT pr.id as idT, pr.nombre as nombreT, ta.* FROM proyecto pr, tarea ta WHERE pr.id = ta.proyecto AND pr.id = $id";

include_once "../model/conection.php";

$result = consulta2($query);

$proyecto = consulta2("SELECT nombre FROM proyecto WHERE id = $id");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver las tareas del proyecto</title>
</head>

<body>
    <header>
        <h1>Ver las tareas del proyecto</h1>
    </header>

    <section>
        <table>
            <caption>Proyecto <?php
            while ($pr = mysqli_fetch_array($proyecto)) {
                ?>
               
            
            <?php echo $pr['nombre']; ?><?php } ?></caption>
            <thead>
                <th>Tarea</th>
            </thead>
            <tbody>
                <?php 
                    while ($r = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo  "<td>" . $r['nombre']. "</td>";

                    if ($r['estado'] == 1)$est = "Pendiente";
                    if ($r['estado'] == 2)$est = "En progreso";
                    if ($r['estado'] == 3)$est = "Finalizada";

                    echo  "<td>" . $est . "</td>";
                    echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </section>

</body>

</html>