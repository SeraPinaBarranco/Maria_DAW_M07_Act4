<?php

$tabla = $_POST['tabla'];

if($tabla == "usuario"){

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $pass = $_POST['pass'];
    $tipo = intval($_POST['tipo']);

    $query = "UPDATE $tabla SET nombre = '$nombre', pass = '$pass', tipo_usuario= $tipo WHERE id=  $id";

}elseif($tabla == "proyecto"){

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];


    $query = "UPDATE $tabla SET nombre = '$nombre' WHERE id=  $id";
}else{
    //<a href='templates/modificar_proyecto.php?table=tarea&usuario=".$fila['nombreU']."&proyecto=".$fila['nombreP']."&nombre=".$fila['nombre'].
    $idU = $_POST['idU'];
    $idT = $_POST['idT'];
    $estado = $_POST['estado'];
    $nombre = $_POST['nombre'];

    $query = "UPDATE $tabla SET nombre = '$nombre', estado = '$estado'WHERE usuario=  $idU and proyecto= $idT";
}


require_once "../model/conection.php";


$result = consulta2($query);

if ($result) {
    header("Refresh: 2; url=frm_modificar_datos.php");
    echo "Exito al editar";
} else {
    echo "Error al editar";
}


?>