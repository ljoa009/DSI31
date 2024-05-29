<?php
    if(isset($_SESSION['user'])){
?>
<html>
    <html lang="es">
    <head>
        <link rel="stylesheet" href="CSS/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <form method="post" action="I_Direcciones.php">
        <label>Nombre de la Calle: </label>
        <input type="text" id="NombreCalle" name="NombreCalle">
        <br>
        <label>Número: </label>
        <input type="number" id="Numero" name="Numero">
        <br>
        <label>Colonia: </label>
        <input type="text" id="Colonia" name="Colonia">
        <br>
        <label>Kilometro: </label>
        <input type="number" id="Kilometro" name="Kilometro">
        <br>
        <label>Código Postal: </label>
        <input type="number" id="CodigoPostal" name="CodigoPostal">
        <br>
        <label>Municipio: </label>
        <input type="text" id="Municipio" name="Municipio">
        <br>
        <label>Localidad: </label>
        <input type="text" id="Localidad" name="Localidad">
        <br>
        <label>Estado: </label>
        <select id="Estado" name="Estado">
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
        <label>Referencia: </label>
        <input type="text" id="Referencia" name="Referencia">
        <br>
        <input type="submit">
    </form>
</html>
<?php
    }else{
        header('location: Login.php');
    }
?>
