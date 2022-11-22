<?php 



function conn (){
    $SERVER= "localhost";
    $USER="root";
    $PASS="";
    $DB="actividad4";

    $mysqli = mysqli_connect($SERVER,$USER,$PASS,$DB)or die("Failed to connect to MySQL: ") ;
    
    return $mysqli;  
}


/**
 * Devuelve un array asociativo 
 * param {llama a la funcion de consulta}
 * param { recibe la consulta}
 */
function consulta($query){
    
    $resultado= mysqli_query(conn(), $query);
    $filas= mysqli_fetch_assoc($resultado);   
    close_conn();
    
    return $filas;
}

//Cierra la conexion a la BBDD
function close_conn(){
    mysqli_close(conn());
}


?>