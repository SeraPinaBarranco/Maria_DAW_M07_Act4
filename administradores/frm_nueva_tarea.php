<?php 
    require_once "../model/queries.php";
    //traer los datos de los usuarios
    $usuarios = get_data("usuario");
    
    //traer los datos de los proyectos
    $proyectos = get_data("proyecto");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <header>
        <h1>Tarea nueva</h1>
    </header>
    <section>

        <form action="" method="post">
            
            <label>Usuario</label>
            <select name="usuario" id="usuario">
                <?php 
                    while($user=mysqli_fetch_array($usuarios)){
                        echo " <option value='". $user['id'] ."'>". $user['nombre'] ."</option>";
                    }
                ?>
            </select><br><br>
    
            <label>Proyecto</label>
            <select name="proyecto" id="proyecto">
                <?php 
                    while($proyecto=mysqli_fetch_array($proyectos)){
                        echo " <option value='". $proyecto['id'] ."'>". $proyecto['nombre'] ."</option>";
                    }
                ?>
            </select><br><br>
    
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="nombre"><br><br>
    
            <label for="">Estado</label>
            <select name="proyecto" id="proyecto">                
                <option value="1">Pendiente</option>
                <option value="2">En progreso</option>
                <option value="3">Finalizada</option>
            </select><br><br>
    
            <input type="submit" value="Guardar" name="guardar">
            <!-- TODO crear archivo para dar de alta a las tareas -->
        </form>

    </section>
    
</body>
</html>