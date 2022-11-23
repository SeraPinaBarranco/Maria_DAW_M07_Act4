

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
        <form action="./alta_usuario.php" method="post" >
            Nombre: <input type="text" name="nombre" id="nombre">
            <div>
                Password: <input type="text" name="pass" id="pass">
                Re-Password: <input type="text" name="repass" id="repass">
            </div>
            Tipo-usuario: 
            <select name="tipo" id="tipo">
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