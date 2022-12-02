<?php
function conn()
{
    $SERVER = "localhost";
    $USER = "root";
    $PASS = "";
    //$PASS="usbw";
    $DB = "actividad4";

    $mysqli = mysqli_connect($SERVER, $USER, $PASS, $DB) or die("Failed to connect to MySQL: ");

    return $mysqli;
}


/**
 * Devuelve un array asociativo 
 * param {llama a la funcion de consulta}
 * param { recibe la consulta}
 */
function consulta($query)
{

    $resultado = mysqli_query(conn(), $query);

    $filas = mysqli_fetch_assoc($resultado);
    close_conn();

    return $filas;
}

function consulta2($query)
{
    return mysqli_query(conn(), $query);
}

//Guardar registros
function guardar($query): string
{
    try {
        $resultado = mysqli_query(conn(), $query);

        $filas = mysqli_affected_rows(conn());

        return "Registro guardado!";
    } catch (Exception $e) {
        return $e->getMessage();
    }
    //return -1;
}

function guardar2($query, $array): int
{
    $msg = "";
    try {
        $conn = conn();
        $stmt = $conn->prepare($query);

        //Recorre el array pasado por parametro para asignar cada posicion al statement
        foreach ($array as $value) {
            $stmt->bind_param("s", $value);
        }
        $stmt->execute();

        $msg = 1;
    } catch (Exception $th) {
        $msg = -1;
    }


    $stmt->close();
    $conn->close();
    return $msg;
}

//Cierra la conexion a la BBDD
function close_conn()
{
    mysqli_close(conn());
}

//BORRAR REGISTROS
function borrar($query): string
{
    try {
        mysqli_query(conn(), $query);
        return "Registro Borrado";
    } catch (Exception $e) {
        return ". Error al borrar el registro";
    }
    //return -1;
}


//Modificar REGISTROS
function modificar($query): string
{
    try {
        mysqli_query(conn(), $query);
        return "Registro Modificado";
    } catch (Exception $e) {
        return ". Error al modificar el registro";
    }finally{
        close_conn();
    }
    //return -1;
}
