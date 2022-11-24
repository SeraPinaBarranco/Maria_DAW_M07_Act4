<?php 

    require_once "../model/conection.php";

    $query_user = "SELECT * FROM usuario";

    $resultado = consulta2($query_user);

    $query_proyecto = "SELECT * FROM proyecto";

    $resultado_proyecto = consulta2($query_proyecto);



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
    <header><h1>Modificar datos</h1></header>

    <section style="display: flex; flex-direction:column; align-items: center; background-color:blue; text-align: center;">
        <div style="background-color:green; width: 50%; text-align: right;">
            <table border="1">
                <caption>Tabla usuarios</caption>
                <thead>
                    <th>Nombre</th>
                    <th>Tipo</th>
                </thead>
                <tbody>
                    <?php 
                        //TODO recorrer array con los resultados de la consulta usuarios
                        while ($fila = mysqli_fetch_array($resultado)) {
                            //extract($fila);
                            echo "<tr>";                          
                            echo   "<td>".$fila['nombre'] . "</td>";                            
                            echo   "<td>". $tipo = $fila['tipo_usuario']== "0" ? "Administrador" : "Usuario" . "</td>";
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
                </thead>
                <tbody>
                <?php 
                        //TODO recorrer array con los resultados de la consulta usuarios
                        while ($fila = mysqli_fetch_array($resultado_proyecto)) {
                            //extract($fila);
                            echo "<tr>";                          
                            echo   "<td>".$fila['nombre'] . "</td>"; 
                            echo "</tr>";
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </section>
    
</body>
</html>