<?php
    session_start();
    if(isset($_SESSION['user'])){
?>
<html>
    <html lang="es">
    <head>
        <link rel="stylesheet" href="CSS/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <form method="post" action="D_Propietarios.php">
        <label>Eliminar Verificaciones</label>
        </p>
        <label>Id Verificación: </label>
        <br>
        <input type="number" Id="IdVerificacion" Name="IdVerificacion">
        <br>
        <input type="submit">
    </form>
</html>
<?php
    }else{
        header('location: Login.php');
    }
?>
