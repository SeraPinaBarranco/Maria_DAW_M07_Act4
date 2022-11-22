<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section>

        <form action="./model/login.php" method="post">
            <h2>Login</h2>
            <div>
                <label for="user">Nombre de usuario</label>
                <input type="text" name="user" id="user">
            </div>

            <div>
            <label for="pass">Contraseña</label>
                <input type="text" name="pass" id="pass">
            </div>

            <div>
                <input type="submit" value="Login" name="btn_login" id="btn_login">
            </div>

        </form>

    </section>
    
</body>
</html>