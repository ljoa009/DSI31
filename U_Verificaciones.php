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

if(isset($_POST['IdVerificaciones'])){
    $IdVerificaciones=$_POST['IdVerificaciones'];

    $Con=Conectar();
    $SQL="SELECT * FROM Verificaciones WHERE Id = '$IdVerificaciones';";
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
        <label> Folio: </label>
        <input type="number" id="Folio" name="Folio" value="<?php print($Fila[1]); ?>">
        <label> Fecha: </label>
        <input type="date" id="Fecha" name="Fecha" value="<?php print($Fila[2]); ?>">
        <label> Dictamen: </label>
        <input type="text" id="Dictamen" name="Dictamen" value="<?php print($Fila[3]); ?>">
        <label> Técnico: </label>
        <input type="text" id="Tecnico" name="Tecnico" value="<?php print($Fila[4]); ?>">
        <label> Hora de Entrada: </label>
        <input type="time" id="HoraEntrada" name="HoraEntrada" value="<?php print($Fila[5]); ?>">
        <label> Hora de Salida: </label>
        <input type="time" id="HoraSalida" name="HoraSalida" value="<?php print($Fila[6]); ?>">
        <label> Folio de Prueba: </label>
        <input type="number" id="FolioPrueba" name="FolioPrueba" value="<?php print($Fila[7]); ?>">
        <label> Vigencia: </label>
        <input type="date" id="Vigencia" name="Vigencia" value="<?php print($Fila[8]); ?>">
        <label> Semestre: </label>
        <input type="number" id="Semestre" name="Semestre" value="<?php print($Fila[9]); ?>">
        <label> Tipo: </label>
        <input type="text" id="Tipo" name="Tipo" value="<?php print($Fila[10]); ?>">
        <label> Línea: </label>
        <input type="number" id="Linea" name="Linea" value="<?php print($Fila[11]); ?>">
        <label> Número de Identificación Vehícular: </label>
        <input type="text" id="Niv" name="Niv" value="<?php print($Fila[12]); ?>">
        <label> Motivo: </label>
        <input type="text" id="Motivo" name="Motivo" value="<?php print($Fila[13]); ?>">
        <label> Centro de Verificación: </label>
        <input type="number" id="Centro" name="Centro" value="<?php print($Fila[14]); ?>">
        <label> Tarjeta de Circulación: </label>
        <input type="number" id="TarjetaCirculacion" name="TarjetaCirculacion" value="<?php print($Fila[15]); ?>">
        <input type="hidden" id="IdVerificaciones" name="IdVerificaciones" value="<?php  print($IdVerificaciones); ?>">
        <input  type="submit">
    </form>
    <?php
    }
    desconectar($Con);
}
if(isset($_POST['Folio'])){
    $Folio = $_POST['Folio'];
    $Fecha = $_POST['Fecha'];
    $Dictamen = $_POST['Dictamen'];
    $Tecnico = $_POST['Tecnico'];
    $HoraEntrada = $_POST['HoraEntrada'];
    $HoraSalida = $_POST['HoraSalida'];
    $FolioPrueba = $_POST['FolioPrueba'];
    $Vigencia = $_POST['Vigencia'];
    $Semestre = $_POST['Semestre'];
    $Tipo = $_POST['Tipo'];
    $Linea = $_POST['Linea'];
    $Niv = $_POST['Niv'];
    $Motivo = $_POST['Motivo'];
    $Centro = $_POST['Centro'];
    $TarjetaCirculacion = $_POST['TarjetaCirculacion'];
    $Con=Conectar();
    $SQL="UPDATE Verificaciones SET Folio='$Folio', Fecha='$Fecha', Dictamen='$Dictamen', Tecnico='$Tecnico', HoraEntrada='$HoraEntrada', HoraSalida='$HoraSalida', FolioPrueba='$FolioPrueba', Vigencia='$Vigencia', Semestre='$Semestre', Tipo='$Tipo', Linea='$Linea', Niv='$Niv', Motivo='$Motivo', Centro='$Centro', TarjetaCirculacion='$TarjetaCirculacion' WHERE Id ='$IdVerificaciones';";
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
    <label> Id Verificación: </label>
    <input type="text" id="IdVerificaciones" name="IdVerificaciones">
    <input  type="submit">
</form>
<?php endif; ?>

<?php if(!$mostrar_formulario && isset($_POST['Folio'])): ?>
<form action="U_Verificaciones.php">
    <button type="submit" class="button">Continuar</button>
</form>
<?php endif; ?>

</html>