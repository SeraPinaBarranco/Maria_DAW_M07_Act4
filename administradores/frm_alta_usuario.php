
<?php 
    //recibir datos del propio formulario
// if (!empty($_POST['nombre']) && !empty($_POST['pass'])) {
    
//     require_once "../model/queries.php";

//     $res = insertar_usuario($_POST['nombre'] ,$_POST['pass'], intval($_POST['tipo']));
    
//     if( intval($res)  >= 0 ){
//         echo "Registro guardado";
//     }
//  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta usuario</title>
</head>
<body>
    <header><h1>Alta usuario</h1></header>

    <section>
        <!-- <form action="/*<?php echo $_SERVER['PHP_SELF']; ?>*/" method="post" > -->
        <form action="./alta_usuario.php" method="post" >
            Nombre: <input type="text" name="nombre" id="nombre">
            <div style="margin-top: 2vh; margin-bottom: 2vh;">
                Password: <input type="text" name="pass" id="pass"><br>
                Re-Password: <input type="text" name="repass" id="repass">
            </div>
            Tipo-usuario: 
            <select name="tipo" id="tipo" style="margin-bottom: 2vh;">
                <option value="0">Administrador</option>
                <option value="1">Usuario</option>
            </select>
            <div>
                <input type="submit" value="Guardar" name="guardar">                
            </div>

        </form>
    </section>
    
</body>
</html>