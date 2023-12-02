<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <div>
        <h4>Creación de cuenta</h4>
        <hr>
        <form action="auth.php?action=register" method="post">
            <p>
                <label for="">Nombre</label>
                <input type="text" name="name">
            </p>
            <p>
                <label for="">Correo</label>
                <input type="email" name="email">
            </p>
            <p>
                <label for="">Contraseña</label>
                <input type="password" name="password">
            </p>
            <input type="hidden" name="action" value="register">
            <button type="submit">Registrar</button>
        </form>
        <p>
            <small>¿Ya tienes cuenta? <a href="index.php">Iniciar sesión</a></small>
        </p>
    </div>
</body>
</html>