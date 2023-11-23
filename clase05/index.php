<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 05</title>
</head>
<body>
    <h1>Clase 05</h1>
    <div>
        <form action="auth.php" method="post">
            <?php 
                if(!empty($_SESSION["msj"])){  //si NO esta vacio
                    echo $_SESSION["msj"];
                }
            ?>
            <div>
                <label for="email">Correo</label>
                <input type="email" name="email" placeholder="Ingrese su correo electronico">
            </div>
            <div>
                <label for="password">Contraseña</label>
                <input type="password" name="password" placeholder="Ingrese su contraseña">
            </div>
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>
