

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta usuario</title>
</head>
<body>
    <header><h1>Alta proyecto</h1></header>

    <section>
        <!-- <form action="/*<?php echo $_SERVER['PHP_SELF']; ?>*/" method="post" > -->
        <form action="./alta_proyecto.php" method="post" >
            Nombre del proyecto: <input type="text" name="nombre" id="nombre">
            
            <div>
                <input type="submit" value="Guardar" name="guardar">                
            </div>

        </form>
    </section>
    
</body>
</html>