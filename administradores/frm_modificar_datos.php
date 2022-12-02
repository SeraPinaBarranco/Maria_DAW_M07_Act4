<?php

require_once "../model/conection.php";

$query_user = "SELECT * FROM usuario";

$resultado = consulta2($query_user);

$query_proyecto = "SELECT * FROM proyecto";

$resultado_proyecto = consulta2($query_proyecto);

$query_tarea = "SELECT t.*, u.nombre as nombreU , p.nombre as nombreP from tarea t LEFT OUTER JOIN usuario u ON t.usuario = u.id LEFT OUTER JOIN proyecto p ON t.proyecto = p.id";

$resultado_tarea = consulta2($query_tarea);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar datos</title>
</head>

<body>
    <header>
        <h1>Modificar datos</h1>
    </header>

    <section style="display: flex; flex-direction:column; align-items: center; background-color:blue; text-align: center;">
        <div style="background-color:green; width: 50%; text-align: right;">
            <table border="1">
                <caption>Tabla usuarios</caption>
                <thead>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php
                    //recorrer array con los resultados de la consulta usuarios
                    while ($fila = mysqli_fetch_array($resultado)) {
                        //extract($fila);
                        echo "<tr>";
                        echo   "<td>" . $fila['nombre'] . "</td>";
                        echo   "<td>" . $tipo = $fila['tipo_usuario'] == "0" ? "Administrador" : "Usuario" . "</td>";
                        echo   "<td><a href='templates/modificar_usuario.php?id=". $fila['id'] ."'>Modificar</a>&nbsp;&nbsp;&nbsp;<a href='eliminar.php?table=usuario&id=". $fila['id'] ."'>Eliminar</a> </td> ";                        
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <section>
        <div>
            <table border="1">
                <caption>Tabla proyectos</caption>
                <thead>
                    <th>Nombre</th>
                    <th>Acciones</th>
                    <th>Ver</th>
                </thead>
                <tbody>
                    <?php
                    //TODO recorrer array con los resultados de la consulta usuarios
                    while ($fila = mysqli_fetch_array($resultado_proyecto)) {
                        //extract($fila);
                        echo "<tr>";
                        echo   "<td>" . $fila['nombre'] . "</td>";
                        echo   "<td><a href='templates/modificar_proyecto.php?table=proyecto&id=". $fila['id'] ."'>Modificar</a>&nbsp;&nbsp;&nbsp;<a href='eliminar.php?table=proyecto&id=". $fila['id'] ."'>Eliminar</a> </td> ";
                        echo   "<td><a href='ver_tareas_proyecto.php?proyecto=". $fila['id'] ."'>Visualizar tareas </a>"; 
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <section>
        <div>
            <table border="1">
                <caption>Tabla tareas</caption>
                <thead>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Proyecto</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php
                    //TODO recorrer array con los resultados de la consulta usuarios
                    while ($fila = mysqli_fetch_array($resultado_tarea)) {
                        //extract($fila);
                        echo "<tr>";
                        echo   "<td>" . $fila['nombre'] . "</td>";
                        echo   "<td>" . $fila['nombreU'] . "</td>";
                        echo   "<td>" . $fila['nombreP'] . "</td>";
                        if ($fila['estado'] == 1)$est = "Pendiente";
                        if ($fila['estado'] == 2)$est = "En progreso";
                        if ($fila['estado'] == 3)$est = "Finalizada";
                        echo   "<td>" . $est . "</td>";
                        echo   "<td><a href='templates/modificar_proyecto.php?tabla=tarea&usuario=".$fila['nombreU']."&proyecto=".$fila['nombreP']."&nombre=".$fila['nombre']."'>Modificar</a>&nbsp;&nbsp;&nbsp;<a href='eliminar.php?table=tarea&idU=". $fila['usuario'] ."&idt=". $fila['proyecto'] ."  '>Eliminar</a> </td> ";                        
                        echo "</tr>";
                    }
                    ?> 
                </tbody>
            </table>
        </div>
    </section>
<!-- <a href="modificar">Modificar</a>
<a href="eliminar">Eliminar</a> -->

    
</body>

</html>