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
    <form method="get" action="I_Conductores.php">
        <label>Nombre: </label>
        <input type="text" id="Nombre" name="Nombre">
        <br>
        <label>Apellido: </label>
        <input type="text" id="Apellido" name="Apellido">
        <br>
        <label>Fecha de Nacimiento: </label>
        <input type="date" id="FechaNac" name="FechaNac">
        <br>
        <label>Firma: </label>
        <input type="file" id="Firma" name="Firma">
        <br>
        <label>Dirección: </label>
        <input type="number" id="Direccion" name="Direccion">
        <br>
        <input type="submit">
    </form>
</html>
<?php
    }else{
        header('location: Login.php');
    }
?>