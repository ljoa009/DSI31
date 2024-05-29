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

if(isset($_POST['IdTenencias'])){
    $IdTenencias=$_POST['IdTenencias'];

    $Con=Conectar();
    $SQL="SELECT * FROM Tenencias WHERE Id = '$IdTenencias';";
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
        <label> Transacción: </label>
        <input type="text" id="Transaccion" name="Transaccion" value="<?php print($Fila[1]); ?>">
        <label> Línea de Captura: </label>
        <input type="number" id="LineaCaptura" name="LineaCaptura" value="<?php print($Fila[2]); ?>">
        <label> Tipo de Instrumento de Pago: </label>
        <input type="text" id="T_InstrumentoP" name="T_InstrumentoP" value="<?php print($Fila[3]); ?>">
        <label> Fecha Límite: </label>
        <input type="date" id="FechaLimite" name="FechaLimite" value="<?php print($Fila[4]); ?>">
        <label> Importe: </label>
        <input type="number" id="Importe" name="Importe" value="<?php print($Fila[5]); ?>">
        <label> Fecha Actual: </label>
        <input type="date" id="FechaActual" name="FechaActual" value="<?php print($Fila[6]); ?>">
        <label> Hora: </label>
        <input type="time" id="Hora" name="Hora" value="<?php print($Fila[7]); ?>">
        <label> Nota: </label>
        <input type="text" id="Nota" name="Nota" value="<?php print($Fila[8]); ?>">
        <label> Tarjeta de Circulación: </label>
        <input type="number" id="TarjetaCirculacion" name="TarjetaCirculacion" value="<?php print($Fila[9]); ?>">
        <input type="hidden" id="IdTenencias" name="IdTenencias" value="<?php  print($IdTenencias); ?>">
        <input  type="submit">
    </form>
    <?php
    }
    desconectar($Con);
}
if(isset($_POST['Transaccion'])){
    $Transaccion = $_POST['Transaccion'];
    $LineaCaptura = $_POST['LineaCaptura'];
    $T_InstrumentoP = $_POST['T_InstrumentoP'];
    $FechaLimite = $_POST['FechaLimite'];
    $Importe = $_POST['Importe'];
    $FechaActual = $_POST['FechaActual'];
    $Hora = $_POST['Hora'];
    $Nota = $_POST['Nota'];
    $TarjetaCirculacion = $_POST['TarjetaCirculacion'];
    $Con=Conectar();
    $SQL="UPDATE Tenencias SET Transaccion='$Transaccion', LineaCaptura='$LineaCaptura', T_InstrumentoP='$T_InstrumentoP', FechaLimite='$FechaLimite', Importe='$Importe', FechaActual='$FechaActual', Hora='$Hora', Nota='$Nota', TarjetaCirculacion='$TarjetaCirculacion' WHERE Id ='$IdTenencias';";
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
    <label> Id Tenencia: </label>
    <input type="text" id="IdTenencias" name="IdTenencias">
    <input  type="submit">
</form>
<?php endif; ?>

<?php if(!$mostrar_formulario && isset($_POST['Transaccion'])): ?>
<form action="U_Tenencias.php">
    <button type="submit" class="button">Continuar</button>
</form>
<?php endif; ?>

</html>
<?php
    }else{
        header('location: Login.php');
    }
?>
