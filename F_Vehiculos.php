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
  <form method="post" action="I_Vehiculos.php">
    <label> Número de Serie: </label>
    <input type="text" id="NoSerie" name="NoSerie">
    <br>
    <label> Placa: </label>
    <input type="text" id="Placa" name="Placa">
    <br>
    <label> Tipo de Servicio: </label>
    <input type="text" id="T_Servicio" name="T_Servicio">
    <br>
    <label> Marca: </label>
    <input type="text" id="Marca" name="Marca">
    <br>
    <label> Modelo: </label>
    <input type="number" id="Modelo" name="Modelo">
    <br>
    <label> Origen: </label>
    <input type="text" id="Origen" name="Origen">
    <br>
    <label> Color: </label>
    <input type="text" id="Color" name="Color">
    <br>
    <label> Cilindraje: </label>
    <input type="number" id="Cilindraje" name="Cilindraje">
    <br>
    <label> Capacidad: </label>
    <input type="number" id="Capacidad" name="Capacidad">
    <br>
    <label> Clase: </label>
    <input type="text" id="Clase" name="Clase">
    <br>
    <label> Tipo de Carrocería: </label>
    <input type="text" id="Tipo" name="Tipo">
    <br>
    <label> Uso: </label>
    <input type="text" id="Uso" name="Uso">
    <br>
    <label> Puerta: </label>
    <input type="number" id="Puerta" name="Puerta">
    <br>
    <label> Asiento: </label>
    <input type="number" id="Asiento" name="Asiento">
    <br>
    <label> Combustible: </label>
    <input type="text" id="Combustible" name="Combustible">
    <br>
    <label> Transmisión: </label>
    <input type="text" id="Transmision" name="Transmision">
    <br>
    <label> Número de Motor: </label>
    <input type="text" id="NoMotor" name="NoMotor">
    <br>
    <input type="submit">
  </form>
<html>
<?php
    }else{
        header('location: Login.php');
    }
?>
