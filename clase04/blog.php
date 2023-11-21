<?php 
    // $id = $_GET['id'];
    // if(isset($_GET['nombre'])){
    //     echo $_GET['nombre'];
    // }
    // if(isset($_POST['nombre'])){
    //     echo $_POST['nombre'];
    // }
    /**
     * 
     * Crear un formulario que simule el envio de correo
     * -Destinatario (email)
     * -Titulo
     * -Contenido
     * y recibir la información en otra  pagina e imprimirla en pantalla.
     */
    if(empty($_POST['email']) || empty($_POST['title']) || empty($_POST['content'])){  //si esta vacio?
        header("Location: home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_POST['title'] ?></title>
</head>
<body>
    <h1>Mensaje de correo</h1>
    <table>
        <tr>
            <td>Correo:</td>
            <td>
                <?php echo $_POST['email'] ?>
            </td>
        </tr>
        <tr>
            <td>Titulo:</td>
            <td>
                <?php echo $_POST['title'] ?>
            </td>
        </tr>
        <tr>
            <td>Mensaje:</td>
            <td>
                <?php echo $_POST['content'] ?>
            </td>
        </tr>
    </table>
</body>
</html>
<?php 
    /**
     * Crear un fomulario de login (correo/contraseña)
     * validar que no este ningun campo vacio
     * validar que el correo sea: developerphp@test.test
     * y la contraseña 1234AbcD
     */
?>