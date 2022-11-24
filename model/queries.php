<?php

    require_once "conection.php";

    $conexion = conn();
    function comprobar_usuario($user, $pass){
        $query = "SELECT nombre, pass, tipo_usuario FROM usuario WHERE nombre='$user' and pass='$pass' ";
        
        $res= consulta($query);

        
        if(!is_null($res) > 0){
            $res['tipo_usuario'] === "0" 
                ? header("Location: ../administradores/administradores.php")
                : header("Location: ../usuarios/usuarios.php");
        }else{
            header("Location: error_page.php");
        }
        
    }

    function insertar_usuario($user, $pass, $tipo){
        $query= "INSERT INTO usuario(nombre, pass, tipo_usuario) VALUES ('$user', '$pass', $tipo)";

        $res =  guardar($query);

        return $res;
    }

    function insertar_proyecto($nombre):int{
        $query= "INSERT INTO proyecto(nombre) VALUES (?)";
        $array = $nombre;
        //array_push($array, $nombre);
        return guardar2($query, $array);;
    }

    function get_data($tabla){
        $query= "SELECT * FROM $tabla";
        $consulta = consulta2($query);
        return $consulta;
    }


?>