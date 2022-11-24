<?php 
    //recibir datos del propio formulario
if (!empty($_POST['nombre'])) {
    
    require_once "../model/queries.php";

    $array_form = [];
    array_push($array_form, $_POST['nombre']);

    echo insertar_proyecto($array_form);
    
    //echo $res;
 }//else{
//     echo($_POST['pass']);
// }

?>