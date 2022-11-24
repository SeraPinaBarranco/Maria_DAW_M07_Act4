<?php 
    //recibir datos del propio formulario
if (!empty($_POST['nombre']) && !empty($_POST['pass'])) {
    
    require_once "../model/queries.php";

    $res = insertar_usuario($_POST['nombre'] ,$_POST['pass'], intval($_POST['tipo']));
    
    echo $res;
 }//else{
//     echo($_POST['pass']);
// }

?>