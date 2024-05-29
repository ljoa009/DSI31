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
    <form method="post" action="I_Verificaciones.php">
        <label>Folio: </label>
        <input type="number" id="Folio" name="Folio">
        <br>
        <label>Fecha: </label>
        <input type="date" id="Fecha" name="Fecha">
        <br>
        <label>Dictamen: </label>
        <input type="text" id="Dictamen" name="Dictamen">
        <br>
        <label>Técnico: </label>
        <input type="text" id="Tecnico" name="Tecnico">
        <br>
        <label>Hora de Entrada: </label>
        <input type="time" id="HoraEntrada" name="HoraEntrada">
        <br>
        <label>Hora de Salida: </label>
        <input type="time" id="HoraSalida" name="HoraSalida">
        <br>
        <label>Folio Prueba: </label>
        <input type="number" id="FolioPrueba" name="FolioPrueba">
        <br>
        <label>Vigencia: </label>
        <input type="date" id="Vigencia" name="Vigencia">
        <br>
        <label>Semestre: </label>
        <input type="number" id="Semestre" name="Semestre">
        <br>
        <label>Tipo de Carrocería: </label>
        <input type="text" id="Tipo" name="Tipo">
        <br>
        <label>Línea: </label>
        <input type="number" id="Linea" name="Linea">
        <br>
        <label>Número de Identifiación Vehicular (NIV): </label>
        <input type="text" id="Niv" name="Niv">
        <br>
        <label>Motivo: </label>
        <input type="text" id="Motivo" name="Motivo">
        <br>
        <label>Centro de Verificación: </label>
        <input type="number" id="Centro" name="Centro">
        <br>
        <label>Tarjeta de Circulación: </label>
        <input type="number" id="TarjetaCirculacion" name="TarjetaCirculacion">
        <br>
        <input type="submit">
    </form>
</html>
<?php
    }else{
        header('location: Login.php');
    }
?>
