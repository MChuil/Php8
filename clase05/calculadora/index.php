<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-6 offset-3">
                <div class="card">
                    <div class="card-header">
                        <h1>Calculadora Básica</h1>
                    </div>
                    <div class="card-body">
                        <p class="badge rounded-pill text-bg-info text-white">Todos los campos son obligatorios...</p>
                        <p>
                            
                            <?php 
                                if(!empty($_SESSION["error"])){
                                    echo "<div class='alert alert-danger'>
                                            <p>{$_SESSION['error']}</p>
                                        </div>";
                                    unset($_SESSION['error']);
                                }
                                if(!empty($_SESSION["response"])){
                                    echo "<div class='alert alert-success'>
                                            <p>{$_SESSION['response']}</p>
                                        </div>";
                                    unset($_SESSION['response']); //borro la variable de sesión
                                }
                            ?>
                        </p>
                        <form action="process.php" method="post" class="d-flex justify-content-around">
                            <div>
                                <input type="number" name="numberOne" class="form-control" placeholder="Primero numero">
                            </div>
                            <div class="mx-4">
                                <select name="operator" class="form-control">
                                    <option value="+">+</option>
                                    <option value="-">-</option>
                                    <option value="*">* <small>(multiplicación)</small></option>
                                    <option value="/">/ <small>(división)</small></option>
                                </select>
                            </div>
                            <div>
                                <input type="number" name="numberTwo" class="form-control" placeholder="Segundo numero">
                            </div>
                            <button type="submit" class="btn btn-primary ms-3">Calcular</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>