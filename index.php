<?php
    if(isset($_SESSION['user'])){
        if($_SESSION['tipo'] == 'U'){
            header('location: Menu_Usuario.php');
        }else{
            header('location: Menu_Admin.php');
        }
    }else{
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="stylesheet" href="CSS/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <h2>Iniciar Sesión</h2>
        <form method="post" action="Validacion.php">
            <label for="User_Name">Usuario:</label><br>
            <input type="text" id="User_Name" name="User_Name" required><br>
            <label for="Password">Contraseña:</label><br>
            <input type="Password" id="Password" name="Password" required><br><br>
            <input type="submit" value="Iniciar Sesión">
        </form>
    </body>
</html>
<?php
    }
?>
