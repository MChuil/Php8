<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Cookies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    
    <main class="container py-5">
        <div class="row mt-5">
            <div class="col-lg-4 offset-lg-4">
                <div class="card">
                    <div class="card-header">
                        Inicio de sesión
                    </div>
                    <div class="card-body">
                        <form action="auth.php" method="post">
                            <div class="form-group mt-3">
                                <label for="email">Correo</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <input type="checkbox" name="recuerdame" value="1">
                                <label for="recuerdame">Recuerdame</label>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-info mt-3">
                                    Iniciar sesión
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>