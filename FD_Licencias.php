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
    <h2>Eliminacion de Datos</h2>
    
    <form method="post" action="D_Licencias.php">
        <label>Eliminar Licencias</label>
        </p>
        <label>Id Licencia: </label>
        <br>
        <input type="number" Id="IdLicencia" Name="IdLicencia">
        <br>
        <input type="submit">
    </form>
</html>
<?php
    }else{
        header('location: Login.php');
    }
?>
