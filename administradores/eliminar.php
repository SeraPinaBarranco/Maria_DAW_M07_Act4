<?php
$page = $_GET['table'];
$id = isset($_GET['id']) ? $_GET['id'] : "";
$query = "DELETE FROM $page WHERE id= $id ";

require_once "../model/conection.php";
if ($page == "usuario") {//*Si el registro es de la tabla usuarios
    
    borrar_datos($query);
    
}
elseif ($page == "proyecto") {//*Si el registro es de la tabla proyectos

    borrar_datos($query);
    
} else {

    $idU = $_GET['idU'];
    $idT = $_GET['idt'];

    $query_tarea = "DELETE FROM $page WHERE usuario= $idU and proyecto = $idT ";

    borrar_datos($query_tarea);
    
}   

function borrar_datos($query){
    $result = consulta2($query);
    
    if($result){
        header("Refresh: 2; url=frm_modificar_datos.php");
        echo "Exito al borrar";        
    }else{
        echo "Error al borrar";
    }
}

?>
