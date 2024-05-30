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
    
    <form method="get" action="I_Licencias.php">
        <label>Número de Licencia: </label>
        <input type="text" id="NoLicencia" name="NoLicencia">
        <br>
        <label>Categoria: </label>
        <select id="Categoria" name="Categoria">
            <option value="" disabled selected>Selecciona una opción</option>
            <option value="sedan">Sedán</option>
            <option value="coupe">Coupé</option>
            <option value="suv">SUV</option>
            <option value="camioneta">Camioneta</option>
            <option value="compacto">Compacto</option>
        </select>
        <br>
        <label>Fecha de Expedición: </label>
        <input type="date" id="FechaExp" name="FechaExp">
        <br>
        <label>Vigencia: </label>
        <input type="date" id="Vigencia" name="Vigencia">
        <br>
        <label>Antiguedad: </label>
        <input type="number" id="Antiguedad" name="Antiguedad">
        <br>
        <label>Estado de Procedencia: </label>
        <select id="EdoProcedencia" name="EdoProcedencia">
            <option value="" disabled selected>Selecciona una opción</option>
            <option value="Aguascalientes">Aguascalientes</option>
            <option value="Baja California">Baja California</option>
            <option value="Baja California Sur">Baja California Sur</option>
            <option value="Campeche">Campeche</option>
            <option value="Chiapas">Chiapas</option>
            <option value="Chihuahua">Chihuahua</option>
            <option value="Coahuila">Coahuila</option>
            <option value="Colima">Colima</option>
            <option value="Durango">Durango</option>
            <option value="Estado de México">Estado de México</option>
            <option value="Guanajuato">Guanajuato</option>
            <option value="Guerrero">Guerrero</option>
            <option value="Hidalgo">Hidalgo</option>
            <option value="Jalisco">Jalisco</option>
            <option value="Michoacán">Michoacán</option>
            <option value="Morelos">Morelos</option>
            <option value="Nayarit">Nayarit</option>
            <option value="Nuevo León">Nuevo León</option>
            <option value="Oaxaca">Oaxaca</option>
            <option value="Puebla">Puebla</option>
            <option value="Querétaro">Querétaro</option>
            <option value="Quintana Roo">Quintana Roo</option>
            <option value="San Luis Potosí">San Luis Potosí</option>
            <option value="Sinaloa">Sinaloa</option>
            <option value="Sonora">Sonora</option>
            <option value="Tabasco">Tabasco</option>
            <option value="Tamaulipas">Tamaulipas</option>
            <option value="Tlaxcala">Tlaxcala</option>
            <option value="Veracruz">Veracruz</option>
            <option value="Yucatán">Yucatán</option>
            <option value="Zacatecas">Zacatecas</option>
        </select>
        <br>
        <label>Clase: </label>
        <select id="Clase" name="Clase">
            <option value="" disabled selected>Selecciona una opción</option>
            <option value="M">Tipo M - Motocicletas</option>
            <option value="A">Tipo A - Automóviles particulares</option>
            <option value="C">Tipo C - Chofer</option>
            <option value="E">Tipo E - Especiales</option>
        </select>    
        <br>
        <label>Grupo Sanguíneo: </label>
        <select id="GrupoSanguineo" name="GrupoSanguineo">
            <option value="" disabled selected>Selecciona una opción</option>
            <option value="O-">O-</option>
            <option value="O+">O+</option>
            <option value="A-">A-</option>
            <option value="A+">A+</option>
            <option value="B-">B-</option>
            <option value="B+">B+</option>
            <option value="AB-">AB-</option>
            <option value="AB+">AB+</option>
        </select>
        <br>
        <label>Restricción: </label>
        <input type="text" id="Restriccion" name="Restriccion">
        <br>
        <label>Donante: </label>
        <input type="radio" id="Donante" name="Donante" value="Sí">Sí
        <input type="radio" id="Donante" name="Donante" value="No">No
        <br>
        <label>Observación: </label>
        <input type="text" id="Observacion" name="Observacion">
        <br>
        <label>Número de Emergencia: </label>
        <input type="number" id="NoEmergencia" name="NoEmergencia">
        <br>
        <label>Conductor: </label>
        <input type="number" id="Conductor" name="Conductor">
        <br>
        <input type="submit">
    </form>
</html>
<?php
    }else{
        header('location: Login.php');
    }
?>
