<?php 



function conn (){
    $SERVER= "localhost";
    $USER="root";
    $PASS="";
    //$PASS="usbw";
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

//Guardar registros
function guardar($query):string{
    try{
        $resultado= mysqli_query(conn(), $query);
    
        $filas= mysqli_affected_rows(conn());

        return strval($filas) ;
    }catch(Exception $e){
        return $e->getMessage();
    }
    //return -1;
}

//Cierra la conexion a la BBDD
function close_conn(){
    mysqli_close(conn());
}


?>