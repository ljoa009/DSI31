<?php
    session_start();
    if(isset($_SESSION['user'])){
        ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="stylesheet" href="CSS/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
    </head>
    <body>
        <h2>Registro de Usuario</h2>
        <form method="post" action="alta_usuario.php">
            <label for="User_Name">Usuario:</label><br>
            <input type="text" id="User_Name" name="User_Name" required><br>
            <label for="Password">Contraseña:</label><br>
            <input type="Password" id="Password" name="Password" required><br>
            <label for="Tipo">Tipo:</label><br>
            <input type="text" id="Tipo" name="Tipo" required><br><br>
            <input type="submit" value="Registrar">
        </form>
    </body>
</html>
        <?php
    }else{
        header('location: Login.php');
    }
?>
