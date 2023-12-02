<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
        <h4>Acceso restringido</h4>
        <hr>
        <form action="auth.php?action=login" method="post">
            <p>
                <label for="">Correo</label>
                <input type="email" name="email">
            </p>
            <p>
                <label for="">Contraseña</label>
                <input type="password" name="password">
            </p>
            <input type="hidden" name="action" value="login">
            <button type="submit">Iniciar sesión</button>
        </form>
        <p>
            <small>¿Aún no tienes cuenta? <a href="register.php">Registrate</a></small>
        </p>
    </div>
</body>
</html>