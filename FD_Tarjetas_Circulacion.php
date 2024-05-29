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
    <form method="post" action="D_Tarjetas_Circulacion.php">
        <label>Eliminar Tarjetas de Circulación</label>
        </p>
        <label>Id Tarjeta de Circulación: </label>
        <br>
        <input type="number" Id="IdTarjetaCirculacion" Name="IdTarjetaCirculacion">
        <br>
        <input type="submit">
    </form>
</html>
<?php
    }else{
        header('location: Login.php');
    }
?>
