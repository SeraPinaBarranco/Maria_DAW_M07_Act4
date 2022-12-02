<?php

if ( !empty($_POST['usuario']) && !empty($_POST['proyecto']) && !empty($_POST['nombre']) && !empty($_POST['estado']) ) {
    
    $usuario = intval($_POST['usuario']);
    $proyecto = intval($_POST['proyecto']);
    $nombre = $_POST['nombre'];
    $estado = intval($_POST['estado']);

    require_once "../model/conection.php";

    $query = "INSERT INTO tarea(usuario, proyecto, nombre, estado) VALUES ($usuario, $proyecto, '$nombre', $estado)";

    echo guardar($query);

} else {
    # code...
}





// try {
    // function guardar()
    // {
    //     $usuario = intval($_POST['usuario']);
    //     $proyecto = intval($_POST['proyecto']);
    //     $nombre = $_POST['nombre'];
    //     $estado = intval($_POST['estado']);
    
    //     //var_dump($_POST);
        
                
    // }
    
    //     $SERVER= "localhost";
    //     $USER="root";
    //     $PASS="";
    //     //$PASS="usbw";
    //     $DB="actividad4";
        
    //     //Conexión al BBDD
    //     $con = new PDO("mysql:host=$SERVER;dbname=$DB", $USER, $PASS);
    //     var_dump($con);
    //     //$query = "INSERT INTO tareas(usuario, proyecto, nombre, estado) VALUES (?,?,?,?)";
    //     //$con->prepare($query)->execute([$usuario, $proyecto, $nombre, $estado]);
        
    // } catch (PDOException $exc) {

    //     //var_dump($exc->getMessage());
    //     echo "Error al guardar el registro:" . $exc;

    // }finally{

    //     $con = null;

    // }

?>


