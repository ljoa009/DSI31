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
<h2>Actualización de Datos</h2>

<?php
include("Controlador.php");

$mostrar_formulario = true; 

if(isset($_POST['IdLicencias'])){
    $IdLicencias=$_POST['IdLicencias'];

    $Con=Conectar();
    $SQL="SELECT * FROM Licencias WHERE Id = '$IdLicencias';";
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
        <label> Número de Licencia: </label>
        <input type="text" id="NoLicencia" name="NoLicencia" value="<?php print($Fila[1]); ?>">
        <label> Categoría: </label>
        <select id="Categoria" name="Categoria">
            <option value="" disabled selected>Selecciona una opción</option>
            <option value="sedan" <?php if($Fila[2] == "sedan") echo "selected"; ?>>Sedán</option>
            <option value="coupe" <?php if($Fila[2] == "coupe") echo "selected"; ?>>Coupé</option>
            <option value="suv" <?php if($Fila[2] == "suv") echo "selected"; ?>>SUV</option>
            <option value="camioneta" <?php if($Fila[2] == "camioneta") echo "selected"; ?>>Camioneta</option>
            <option value="compacto" <?php if($Fila[2] == "compacto") echo "selected"; ?>>Compacto</option>
        </select>
        <label> Fecha de Expedición: </label>
        <input type="date" id="FechaExp" name="FechaExp" value="<?php print($Fila[3]); ?>">
        <label> Vigencia: </label>
        <input type="date" id="Vigencia" name="Vigencia" value="<?php print($Fila[4]); ?>">
        <label> Antigüedad: </label>
        <input type="number" id="Antiguedad" name="Antiguedad" value="<?php print($Fila[5]); ?>">
        <label> Estado de Procedencia: </label>
        <select id="EdoProcedencia" name="EdoProcedencia">
            <option value="" disabled selected>Selecciona una opción</option>
            <option value="Aguascalientes" <?php if($Fila[6] == "Aguascalientes") echo "selected"; ?>>Aguascalientes</option>
            <option value="Baja California" <?php if($Fila[6] == "Baja California") echo "selected"; ?>>Baja California</option>
            <option value="Baja California Sur" <?php if($Fila[6] == "Baja California Sur") echo "selected"; ?>>Baja California Sur</option>
            <option value="Campeche" <?php if($Fila[6] == "Campeche") echo "selected"; ?>>Campeche</option>
            <option value="Chiapas" <?php if($Fila[6] == "Chiapas") echo "selected"; ?>>Chiapas</option>
            <option value="Chihuahua" <?php if($Fila[6] == "Chihuahua") echo "selected"; ?>>Chihuahua</option>
            <option value="Coahuila" <?php if($Fila[6] == "Coahuila") echo "selected"; ?>>Coahuila</option>
            <option value="Colima" <?php if($Fila[6] == "Colima") echo "selected"; ?>>Colima</option>
            <option value="Durango" <?php if($Fila[6] == "Durango") echo "selected"; ?>>Durango</option>
            <option value="Estado de México" <?php if($Fila[6] == "Estado de México") echo "selected"; ?>>Estado de México</option>
            <option value="Guanajuato" <?php if($Fila[6] == "Guanajuato") echo "selected"; ?>>Guanajuato</option>
            <option value="Guerrero" <?php if($Fila[6] == "Guerrero") echo "selected"; ?>>Guerrero</option>
            <option value="Hidalgo" <?php if($Fila[6] == "Hidalgo") echo "selected"; ?>>Hidalgo</option>
            <option value="Jalisco" <?php if($Fila[6] == "Jalisco") echo "selected"; ?>>Jalisco</option>
            <option value="Michoacán" <?php if($Fila[6] == "Michoacán") echo "selected"; ?>>Michoacán</option>
            <option value="Morelos" <?php if($Fila[6] == "Morelos") echo "selected"; ?>>Morelos</option>
            <option value="Nayarit" <?php if($Fila[6] == "Nayarit") echo "selected"; ?>>Nayarit</option>
            <option value="Nuevo León" <?php if($Fila[6] == "Nuevo León") echo "selected"; ?>>Nuevo León</option>
            <option value="Oaxaca" <?php if($Fila[6] == "Oaxaca") echo "selected"; ?>>Oaxaca</option>
            <option value="Puebla" <?php if($Fila[6] == "Puebla") echo "selected"; ?>>Puebla</option>
            <option value="Querétaro" <?php if($Fila[6] == "Querétaro") echo "selected"; ?>>Querétaro</option>
            <option value="Quintana Roo" <?php if($Fila[6] == "Quintana Roo") echo "selected"; ?>>Quintana Roo</option>
            <option value="San Luis Potosí" <?php if($Fila[6] == "San Luis Potosí") echo "selected"; ?>>San Luis Potosí</option>
            <option value="Sinaloa" <?php if($Fila[6] == "Sinaloa") echo "selected"; ?>>Sinaloa</option>
            <option value="Sonora" <?php if($Fila[6] == "Sonora") echo "selected"; ?>>Sonora</option>
            <option value="Tabasco" <?php if($Fila[6] == "Tabasco") echo "selected"; ?>>Tabasco</option>
            <option value="Tamaulipas" <?php if($Fila[6] == "Tamaulipas") echo "selected"; ?>>Tamaulipas</option>
            <option value="Tlaxcala" <?php if($Fila[6] == "Tlaxcala") echo "selected"; ?>>Tlaxcala</option>
            <option value="Veracruz" <?php if($Fila[6] == "Veracruz") echo "selected"; ?>>Veracruz</option>
            <option value="Yucatán" <?php if($Fila[6] == "Yucatán") echo "selected"; ?>>Yucatán</option>
            <option value="Zacatecas" <?php if($Fila[6] == "Zacatecas") echo "selected"; ?>>Zacatecas</option>
        </select>
        <label> Clase: </label>
        <select id="Clase" name="Clase">
            <option value="" disabled selected>Selecciona una opción</option>
            <option value="A" <?php if($Fila[7] == "M") echo "selected"; ?>>Tipo M - Motocicletas</option>
            <option value="B" <?php if($Fila[7] == "A") echo "selected"; ?>>Tipo A - Automóviles particulares</option>
            <option value="C" <?php if($Fila[7] == "C") echo "selected"; ?>>Tipo C - Chofer</option>
            <option value="E" <?php if($Fila[7] == "E") echo "selected"; ?>>Tipo E - Especiales</option>
        </select> 
        <label> Grupo Sanguíneo: </label>
        <select id="GrupoSanguineo" name="GrupoSanguineo">
            <option value="" disabled selected>Selecciona una opción</option>
            <option value="O-" <?php if($Fila[8] == "O-") echo "selected"; ?>>O-</option>
            <option value="O+" <?php if($Fila[8] == "O+") echo "selected"; ?>>O+</option>
            <option value="A-" <?php if($Fila[8] == "A-") echo "selected"; ?>>A-</option>
            <option value="A+" <?php if($Fila[8] == "A+") echo "selected"; ?>>A+</option>
            <option value="B-" <?php if($Fila[8] == "B-") echo "selected"; ?>>B-</option>
            <option value="B+" <?php if($Fila[8] == "B+") echo "selected"; ?>>B+</option>
            <option value="AB-" <?php if($Fila[8] == "AB-") echo "selected"; ?>>AB-</option>
            <option value="AB+" <?php if($Fila[8] == "AB+") echo "selected"; ?>>AB+</option>
        </select>
        <label> Restricción: </label>
        <input type="text" id="Restriccion" name="Restriccion" value="<?php print($Fila[9]); ?>">
        <label> Donante: </label>
        <input type="radio" id="Donante" name="Donante" value="Sí" <?php if($Fila[10] == "Sí") echo "checked"; ?>>Sí
        <input type="radio" id="Donante" name="Donante" value="No" <?php if($Fila[10] == "No") echo "checked"; ?>>No
        <label> Observación: </label>
        <input type="text" id="Observacion" name="Observacion" value="<?php print($Fila[11]); ?>">
        <label> No. de Emergencia: </label>
        <input type="number" id="NoEmergencia" name="NoEmergencia" value="<?php print($Fila[12]); ?>">
        <label> Conductor: </label>
        <input type="number" id="Conductor" name="Conductor" value="<?php print($Fila[13]); ?>">
        <input type="hidden" id="IdLicencias" name="IdLicencias" value="<?php  print($IdLicencias); ?>">
        <input  type="submit">
    </form>
    <?php
    }
    desconectar($Con);
}
if(isset($_POST['NoLicencia'])){
    $NoLicencia = $_POST['NoLicencia'];
    $Categoria = $_POST['Categoria'];
    $FechaExp = $_POST['FechaExp'];
    $Vigencia = $_POST['Vigencia'];
    $Antiguedad = $_POST['Antiguedad'];
    $EdoProcedencia = $_POST['EdoProcedencia'];
    $Clase = $_POST['Clase'];
    $GrupoSanguineo = $_POST['GrupoSanguineo'];
    $Restriccion = $_POST['Restriccion'];
    $Donante = $_POST['Donante'];
    $Observacion = $_POST['Observacion'];
    $NoEmergencia = $_POST['NoEmergencia'];
    $Conductor = $_POST['Conductor'];
    $Con=Conectar();
    $SQL="UPDATE Direcciones SET NoLicencia='$NoLicencia', Categoria='$Categoria', FechaExp='$FechaExp', Vigencia='$Vigencia', Antiguedad='$Antiguedad', EdoProcedencia='$EdoProcedencia', Clase='$Clase', GrupoSanguineo='$GrupoSanguineo', Restriccion='$Restriccion', Donante='$Donante', Observacion='$Observacion', NoEmergencia='$NoEmergencia', Conductor='$Conductor' WHERE Id ='$IdLicencias';";
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
    <label> Id Licencia: </label>
    <input type="text" id="IdLicencias" name="IdLicencias">
    <input  type="submit">
</form>
<?php endif; ?>

<?php if(!$mostrar_formulario && isset($_POST['NoLicencia'])): ?>
<form action="U_Licencias.php">
    <button type="submit" class="button">Continuar</button>
</form>
<?php endif; ?>

</html>
<?php
    }else{
        header('location: Login.php');
    }
?>
