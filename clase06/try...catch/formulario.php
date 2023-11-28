<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try...catch</title>
</head>
<body>
    <h1>Calcular el cubo de un numero</h1>
    <?php if(!empty($_SESSION['error'])){
            echo $_SESSION['error'];
    } ?>
    <form action="index.php" method="post">
        <label for="">Ingrese un numero</label>
        <input type="text" name="number">
        <button type="submit">Calcular</button>
    </form>
</body>
</html>