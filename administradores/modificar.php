<?php
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$pass = $_POST['pass'];
$tipo = intval($_POST['tipo']);

require_once "../model/conection.php";

$query = "UPDATE usuario SET nombre = '$nombre', pass = '$pass', tipo_usuario= $tipo WHERE id=  $id";
"UPDATE usuario SET nombre='Sera',pass='123',tipo_usuario = 0 WHERE id= 15";

$result = consulta2($query);

if ($result) {
    header("Refresh: 2; url=frm_modificar_datos.php");
    echo "Exito al editar";
} else {
    echo "Error al editar";
}


?>