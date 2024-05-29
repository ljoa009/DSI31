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
    <form method="post" action="D_Centros_Verificacion.php">
        <label>Eliminar Centros de Verificación</label>
        </p>
        <label>Id Centro de Verifiación: </label>
        <br>
        <input type="number" Id="IdCentroVerificacion" Name="IdCentroVerificacion">
        <br>
        <input type="submit">
    </form>
</html>
<?php
    }else{
        header('location: Login.php');
    }
?>
