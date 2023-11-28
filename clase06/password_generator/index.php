<?php
    session_start();
    $title = "Generador de contraseñas";
    $password = null;
    if(!empty($_SESSION['password'])){
        $password = $_SESSION['password'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <header class="container text-center">
        <h1><?= $title ?></h1>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3">
                <div class="card">
                    <div class="card-body">
                        <?php if($password == null){ ?>
                            <h5 class="card-title">Genera tu primer contraseña</h5>
                            <a href="generator.php" class="btn btn-primary">Generar ahora</a>
                        <?php }else{ ?>
                            <p>
                                La contraseña generada es: <?= $password ?>
                            </p>
                            <a href="generator.php" class="btn btn-primary">Generar otra contraseña</a>
                            <a href="generator.php?clean=true" class="btn btn-danger">Limpiar</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>