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
    <form method="post" action="D_Vehiculos.php">
        <label>Eliminar Vehiculos</label>
        </p>
        <label>Id Vehiculo: </label>
        <br>
        <input type="number" Id="IdVehiculo" Name="IdVehiculo">
        <br>
        <input type="submit">
    </form>
</html>
<?php
    }else{
        header('location: Login.php');
    }
?>
