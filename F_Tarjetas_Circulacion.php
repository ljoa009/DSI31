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
    <h2>Inserción de Datos</h2>
    
    <form method="get" action="I_Tarjetas_Circulacion.php">S
        <label>Folio: </label>
        <input type="number" id="Folio" name="Folio">
        <br>
        <label>Vigencia: </label>
        <input type="text" id="Vigencia" name="Vigencia">
        <br>
        <label>Operación: </label>
        <input type="text" id="Operacion" name="Operacion">
        <br>
        <label>Folio 2: </label>
        <input type="number" id="Folio_2" name="Folio_2">
        <br>
        <label>Fecha de Expedición: </label>
        <input type="date" id="FechaExp" name="FechaExp">
        <br>
        <label>Oficina Expedidora: </label>
        <input type="number" id="OficinaExpedidora" name="OficinaExpedidora">
        <br>
        <label>Movimiento en la oficina expedidora: </label>
        <input type="text" id="OE_Movimiento" name="OE_Movimiento">
        <br>
        <label>Número de Constancia: </label>
        <input type="number" id="NumConstancia" name="NumConstancia">
        <br>
        <label>Multa: </label>
        <input type="number" id="Multa" name="Multa">
        <br>
        <label>Propietario: </label>
        <input type="number" id="Propietario" name="Propietario">
        <br>
        <label>Vehículo: </label>
        <input type="number" id="Vehiculo" name="Vehiculo">
        <br>
        <input type="submit">
    </form>
</html>
<?php
    }else{
        header('location: Login.php');
    }
?>
