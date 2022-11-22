<?php

    include_once "./conection.php";

    $conexion = conn();
    function comprobar_usuario($user, $pass){
        $query = "SELECT nombre, pass FROM usuario WHERE nombre='$user' and pass='$pass' ";
        
        $res= consulta($query);

        
        if(!is_null($res) > 0){
            header("Location: ../administradores/administradores.php");
        }else{
            header("Location: error_page.php");
        }
        
    }


?>