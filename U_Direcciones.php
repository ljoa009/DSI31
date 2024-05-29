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
<h2>Actualización de Datos</h2>

<?php
include("Controlador.php");

$mostrar_formulario = true; 

if(isset($_POST['IdDirecciones'])){
    $IdDirecciones=$_POST['IdDirecciones'];

    $Con=Conectar();
    $SQL="SELECT * FROM Direcciones WHERE Id = '$IdDirecciones';";
    $ResultSet=Ejecutar($Con,$SQL);
    $Fila=mysqli_fetch_row($ResultSet);

    if(!$Fila){
        $mostrar_formulario = false;
        ?>
        <div class="message-container">
            El ID buscado no existe. Por favor, verifique el ID e inténtelo de nuevo.
        </div>
        <?php
    }else{
        $mostrar_formulario = false;
        ?>
    <form method="POST">
        <label> Nombre de la Calle: </label>
        <input type="text" id="NombreCalle" name="NombreCalle" value="<?php print($Fila[1]); ?>">
        <label> Número: </label>
        <input type="number" id="Numero" name="Numero" value="<?php print($Fila[2]); ?>">
        <label> Colonia: </label>
        <input type="text" id="Colonia" name="Colonia" value="<?php print($Fila[3]); ?>">
        <label> Kilómetro: </label>
        <input type="number" id="Kilometro" name="Kilometro" value="<?php print($Fila[4]); ?>">
        <label> Código Postal: </label>
        <input type="number" id="CodigoPostal" name="CodigoPostal" value="<?php print($Fila[5]); ?>">
        <label> Municipio: </label>
        <input type="text" id="Municipio" name="Municipio" value="<?php print($Fila[6]); ?>">
        <label> Localidad: </label>
        <input type="text" id="Localidad" name="Localidad" value="<?php print($Fila[7]); ?>">
        <label> Estado: </label>
            <select id="Estado" name="Estado">
                <option value="" disabled selected>Selecciona una opción</option>
                <option value="Aguascalientes" <?php if($Fila[8] == "Aguascalientes") echo "selected"; ?>>Aguascalientes</option>
                <option value="Baja California" <?php if($Fila[8] == "Baja California") echo "selected"; ?>>Baja California</option>
                <option value="Baja California Sur" <?php if($Fila[8] == "Baja California Sur") echo "selected"; ?>>Baja California Sur</option>
                <option value="Campeche" <?php if($Fila[8] == "Campeche") echo "selected"; ?>>Campeche</option>
                <option value="Chiapas" <?php if($Fila[8] == "Chiapas") echo "selected"; ?>>Chiapas</option>
                <option value="Chihuahua" <?php if($Fila[8] == "Chihuahua") echo "selected"; ?>>Chihuahua</option>
                <option value="Coahuila" <?php if($Fila[8] == "Coahuila") echo "selected"; ?>>Coahuila</option>
                <option value="Colima" <?php if($Fila[8] == "Colima") echo "selected"; ?>>Colima</option>
                <option value="Durango" <?php if($Fila[8] == "Durango") echo "selected"; ?>>Durango</option>
                <option value="Estado de México" <?php if($Fila[8] == "Estado de México") echo "selected"; ?>>Estado de México</option>
                <option value="Guanajuato" <?php if($Fila[8] == "Guanajuato") echo "selected"; ?>>Guanajuato</option>
                <option value="Guerrero" <?php if($Fila[8] == "Guerrero") echo "selected"; ?>>Guerrero</option>
                <option value="Hidalgo" <?php if($Fila[8] == "Hidalgo") echo "selected"; ?>>Hidalgo</option>
                <option value="Jalisco" <?php if($Fila[8] == "Jalisco") echo "selected"; ?>>Jalisco</option>
                <option value="Michoacán" <?php if($Fila[8] == "Michoacán") echo "selected"; ?>>Michoacán</option>
                <option value="Morelos" <?php if($Fila[8] == "Morelos") echo "selected"; ?>>Morelos</option>
                <option value="Nayarit" <?php if($Fila[8] == "Nayarit") echo "selected"; ?>>Nayarit</option>
                <option value="Nuevo León" <?php if($Fila[8] == "Nuevo León") echo "selected"; ?>>Nuevo León</option>
                <option value="Oaxaca" <?php if($Fila[8] == "Oaxaca") echo "selected"; ?>>Oaxaca</option>
                <option value="Puebla" <?php if($Fila[8] == "Puebla") echo "selected"; ?>>Puebla</option>
                <option value="Querétaro" <?php if($Fila[8] == "Querétaro") echo "selected"; ?>>Querétaro</option>
                <option value="Quintana Roo" <?php if($Fila[8] == "Quintana Roo") echo "selected"; ?>>Quintana Roo</option>
                <option value="San Luis Potosí" <?php if($Fila[8] == "San Luis Potosí") echo "selected"; ?>>San Luis Potosí</option>
                <option value="Sinaloa" <?php if($Fila[8] == "Sinaloa") echo "selected"; ?>>Sinaloa</option>
                <option value="Sonora" <?php if($Fila[8] == "Sonora") echo "selected"; ?>>Sonora</option>
                <option value="Tabasco" <?php if($Fila[8] == "Tabasco") echo "selected"; ?>>Tabasco</option>
                <option value="Tamaulipas" <?php if($Fila[8] == "Tamaulipas") echo "selected"; ?>>Tamaulipas</option>
                <option value="Tlaxcala" <?php if($Fila[8] == "Tlaxcala") echo "selected"; ?>>Tlaxcala</option>
                <option value="Veracruz" <?php if($Fila[8] == "Veracruz") echo "selected"; ?>>Veracruz</option>
                <option value="Yucatán" <?php if($Fila[8] == "Yucatán") echo "selected"; ?>>Yucatán</option>
                <option value="Zacatecas" <?php if($Fila[8] == "Zacatecas") echo "selected"; ?>>Zacatecas</option>
            </select>
        <label> Referencia: </label>
        <input type="text" id="Referencia" name="Referencia" value="<?php print($Fila[9]); ?>">
        <input type="hidden" id="IdDirecciones" name="IdDirecciones" value="<?php  print($IdDirecciones); ?>">
        <input  type="submit">
    </form>
    <?php
    }
    desconectar($Con);
}
if(isset($_POST['NombreCalle'])){
    $NombreCalle = $_POST['NombreCalle'];
    $Numero = $_POST['Numero'];
    $Colonia = $_POST['Colonia'];
    $Kilometro = $_POST['Kilometro'];
    $CodigoPostal = $_POST['CodigoPostal'];
    $Municipio = $_POST['Municipio'];
    $Localidad = $_POST['Localidad'];
    $Estado = $_POST['Estado'];
    $Referencia = $_POST['Referencia'];
    $Con=Conectar();
    $SQL="UPDATE Direcciones SET NombreCalle='$NombreCalle', Numero='$Numero', Colonia='$Colonia', Kilometro='$Kilometro', CodigoPostal='$CodigoPostal', Municipio='$Municipio', Localidad='$Localidad', Estado='$Estado', Referencia='$Referencia' WHERE Id ='$IdDirecciones';";
    $ResultSet=Ejecutar($Con,$SQL);
    desconectar($Con);
    ?>
    <div class="message-container">
        Datos actualizados correctamente
    </div>
    <?php
}
?>  

<?php if($mostrar_formulario): ?> 
<form method="post">
    <label> Id Dirección: </label>
    <input type="text" id="IdDirecciones" name="IdDirecciones">
    <input  type="submit">
</form>
<?php endif; ?>

<?php if(!$mostrar_formulario && isset($_POST['NombreCalle'])): ?>
<form action="U_Conductores.php">
    <button type="submit" class="button">Continuar</button>
</form>
<?php endif; ?>

</html>
<?php
    }else{
        header('location: Login.php');
    }
?>
