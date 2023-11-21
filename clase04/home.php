<?php 
    if(isset($_GET['id'])){
        echo "ID: " . $_GET['id'];
        echo "<br>";
    }
    if(isset($_GET['name'])){
        echo "Nombre: " . $_GET['name'];
    }

    // isset($variable) Valida si EXISTE una variable
    // empty($variable) Valida que exista y que tenga valor, donde 0 y false, equivale a no tener valor
    $num = '';
    if(isset($num)){ //si existe
        echo "Existe num";
    }

    if(empty($num)){ //si esta vacio
        echo  "Esta vacio";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 8</title>
</head>
<body>
    <h1>Embebiendo PHP</h1>
    <ul>
        <li><a href="home.php?id=23&name=Miguel">Vinculos</a></li>
        <li><a href="blog.php?id=23">Vinculo 2</a></li>
        <li>Formularios</li>
    </ul>
    <!-- <form action="blog.php" method="post">
        <label for="name">Nombre: </label>
        <input type="text" name="nombre" placeholder="Ingrese su nombre">
        <button type="submit">Enviar</button>
    </form> -->
    <form action="blog.php" method="post">
        <p>Todos los campos son obligatorios</p>
        <p>
            <label for="email">Correo: </label>
            <input type="email" name="email" placeholder="Ingrese su correo electronico">
        </p>
        <p>
            <label for="title">Titulo: </label>
            <input type="text" name="title" placeholder="Ingrese el titulo del mensaje">
        </p>
        <p>
            <label for="content">Mensaje: </label><br>
            <textarea name="content" id="" cols="30" rows="5"></textarea>
        </p>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>