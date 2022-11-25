<?php

if ( !empty($_POST['usuario']) && !empty($_POST['proyecto']) && !empty($_POST['nombre']) && !empty($_POST['estado']) ) {
    guardar();
} else {
    # code...
}


function guardar()
{
    $usuario = $_POST['usuario'];
    $proyecto = $_POST['proyecto'];
    $nombre = $_POST['nombre'];
    $estado = $_POST['estado'];

    
    try {

        $SERVER= "localhost";
        $USER="root";
        $PASS="";
        //$PASS="usbw";
        $DB="actividad4";
        
        //Conexión al BBDD
        $con = new PDO(
            "mysql:host=$SERVER;dbname=$DB",
            $USER.
            $PASS
        );
        $query = "INSERT INTO tareas(usuario, proyecto, nombre, estado) VALUES (?,?,?,?)";
        $con->prepare($query)->execute([$usuario, $proyecto, $nombre, $estado]);
        
    } catch (PDOException $exc) {

        //var_dump($exc->getMessage());
        echo "Error al guardar el registro";

    }finally{

        $con = null;

    }
        
}




?>