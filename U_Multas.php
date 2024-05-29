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

if(isset($_POST['IdMultas'])){
    $IdMultas=$_POST['IdMultas'];

    $Con=Conectar();
    $SQL="SELECT * FROM Multas WHERE Id = '$IdMultas';";
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
        <label> Hora: </label>
        <input type="time" id="Hora" name="Hora" value="<?php print($Fila[3]); ?>">
        <label> Reporte Sección: </label>
        <input type="text" id="ReporteSeccion" name="ReporteSeccion" value="<?php print($Fila[4]); ?>">
        <label> Motivo: </label>
        <input type="text" id="Motivo" name="Motivo" value="<?php print($Fila[5]); ?>">
        <label> Artículo Base: </label>
        <input type="text" id="ArticuloBase" name="ArticuloBase" value="<?php print($Fila[6]); ?>">
        <label> Garantía: </label>
        <input type="text" id="Garantia" name="Garantia" value="<?php print($Fila[7]); ?>">
        <label> Convenio: </label>
        <input type="radio" id="Convenio" name="Convenio" value="Sí" <?php if($Fila[8] == "Sí") echo "checked"; ?>>Sí
        <input type="radio" id="Convenio" name="Convenio" value="No" <?php if($Fila[8] == "No") echo "checked"; ?>>No
        <br>
        <label> Puesto a Disposición: </label>
        <input type="radio" id="PuestoADisposicion" name="PuestoADisposicion" value="Sí" <?php if($Fila[9] == "Sí") echo "checked"; ?>>Sí
        <input type="radio" id="PuestoADisposicion" name="PuestoADisposicion" value="No" <?php if($Fila[9] == "No") echo "checked"; ?>>No
        <br>
        <label> Observación Personal: </label>
        <input type="text" id="ObsPersonal" name="ObsPersonal" value="<?php print($Fila[10]); ?>">
        <label> Observación Conductor: </label>
        <input type="text" id="ObsConductor" name="ObsConductor" value="<?php print($Fila[11]); ?>">
        <label> Clasificación Boleta: </label>
        <input type="text" id="ClasBoleta" name="ClasBoleta" value="<?php print($Fila[12]); ?>">
        <label> Dirección: </label>
        <input type="number" id="Direccion" name="Direccion" value="<?php print($Fila[13]); ?>">
        <label> Licencia: </label>
        <input type="number" id="Licencia" name="Licencia" value="<?php print($Fila[14]); ?>">
        <label> Oficial: </label>
        <input type="number" id="Oficial" name="Oficial" value="<?php print($Fila[15]); ?>">
        <input type="hidden" id="IdMultas" name="IdMultas" value="<?php  print($IdMultas); ?>">
        <input  type="submit">
    </form>
    <?php
    }
    desconectar($Con);
}
if(isset($_POST['Folio'])){
    $Folio = $_POST['Folio'];
    $Fecha = $_POST['Fecha'];
    $Hora = $_POST['Hora'];
    $ReporteSeccion = $_POST['ReporteSeccion'];
    $Motivo = $_POST['Motivo'];
    $ArticuloBase = $_POST['ArticuloBase'];
    $Garantia = $_POST['Garantia'];
    $Convenio = $_POST['Convenio'];
    $PuestoADisposicion = $_POST['PuestoADisposicion'];
    $ObsPersonal = $_POST['ObsPersonal'];
    $ObsConductor = $_POST['ObsConductor'];
    $ClasBoleta = $_POST['ClasBoleta'];
    $Direccion = $_POST['Direccion'];
    $Licencia = $_POST['Licencia'];
    $Oficial = $_POST['Oficial'];
    $Con=Conectar();
    $SQL="UPDATE Multas SET Folio='$Folio', Fecha='$Fecha', Hora='$Hora', ReporteSeccion='$ReporteSeccion', Motivo='$Motivo', ArticuloBase='$ArticuloBase', Garantia='$Garantia', Convenio='$Convenio', PuestoADisposicion='$PuestoADisposicion', ObsPersonal='$ObsPersonal', ObsConductor='$ObsConductor', ClasBoleta='$ClasBoleta', Direccion='$Direccion', Licencia='$Licencia', Oficial='$Oficial' WHERE Id ='$IdMultas';";
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
    <label> Id Multa: </label>
    <input type="text" id="IdMultas" name="IdMultas">
    <input  type="submit">
</form>
<?php endif; ?>

<?php if(!$mostrar_formulario && isset($_POST['Folio'])): ?>
<form action="U_Multas.php">
    <button type="submit" class="button">Continuar</button>
</form>
<?php endif; ?>

</html>
<?php
    }else{
        header('location: Login.php');
    }
?>
