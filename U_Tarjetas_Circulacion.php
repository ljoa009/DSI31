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

if(isset($_POST['IdTarjetasCirculacion'])){
    $IdTarjetasCirculacion=$_POST['IdTarjetasCirculacion'];

    $Con=Conectar();
    $SQL="SELECT * FROM Tarjetas_circulacion WHERE Id = '$IdTarjetasCirculacion';";
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
        <label> Vigencia: </label>
        <input type="text" id="Vigencia" name="Vigencia" value="<?php print($Fila[2]); ?>">
        <label> Operación: </label>
        <input type="text" id="Operacion" name="Operacion" value="<?php print($Fila[3]); ?>">
        <label> Folio_2: </label>
        <input type="number" id="Folio_2" name="Folio_2" value="<?php print($Fila[4]); ?>">
        <label> Fecha de Expedición: </label>
        <input type="date" id="FechaExp" name="FechaExp" value="<?php print($Fila[5]); ?>">
        <label> Oficina Expedidora: </label>
        <input type="number" id="OficinaExpedidora" name="OficinaExpedidora" value="<?php print($Fila[6]); ?>">
        <label> Oficina Expedidora Movimiento: </label>
        <input type="text" id="OE_Movimiento" name="OE_Movimiento" value="<?php print($Fila[7]); ?>">
        <label> Número de Constancia: </label>
        <input type="number" id="NumConstancia" name="NumConstancia" value="<?php print($Fila[8]); ?>">
        <label> Multa: </label>
        <input type="number" id="Multa" name="Multa" value="<?php print($Fila[9]); ?>">
        <label> Propietario: </label>
        <input type="number" id="Propietario" name="Propietario" value="<?php print($Fila[10]); ?>">
        <label> Vehículo: </label>
        <input type="number" id="Vehiculo" name="Vehiculo" value="<?php print($Fila[11]); ?>">
        <input type="hidden" id="IdTarjetasCirculacion" name="IdTarjetasCirculacion" value="<?php  print($IdTarjetasCirculacion); ?>">
        <input  type="submit">
    </form>
    <?php
    }
    desconectar($Con);
}
if(isset($_POST['Folio'])){
    $Folio = $_POST['Folio'];
    $Vigencia = $_POST['Vigencia'];
    $Operacion = $_POST['Operacion'];
    $Folio_2 = $_POST['Folio_2'];
    $FechaExp = $_POST['FechaExp'];
    $OficinaExpedidora = $_POST['OficinaExpedidora'];
    $OE_Movimiento = $_POST['OE_Movimiento'];
    $NumConstancia = $_POST['NumConstancia'];
    $Multa = $_POST['Multa'];
    $Propietario = $_POST['Propietario'];
    $Vehiculo = $_POST['Vehiculo'];
    $Con=Conectar();
    $SQL="UPDATE Tarjetas_circulacion SET Folio='$Folio', Vigencia='$Vigencia', Operacion='$Operacion', Folio_2='$Folio_2', FechaExp='$FechaExp', OficinaExpedidora='$OficinaExpedidora', OE_Movimiento='$OE_Movimiento', NumConstancia='$NumConstancia', Multa='$Multa', Propietario='$Propietario', Vehiculo='$Vehiculo' WHERE Id ='$IdTarjetasCirculacion';";
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
    <label> Id Tarjeta de Circulación: </label>
    <input type="text" id="IdTarjetasCirculacion" name="IdTarjetasCirculacion">
    <input  type="submit">
</form>
<?php endif; ?>

<?php if(!$mostrar_formulario && isset($_POST['Folio'])): ?>
<form action="U_Tarjetas_Circulacion.php">
    <button type="submit" class="button">Continuar</button>
</form>
<?php endif; ?>

</html>
<?php
    }else{
        header('location: Login.php');
    }
?>
