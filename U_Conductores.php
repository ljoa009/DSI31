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

if(isset($_POST['IdConductores'])){
    $IdConductores=$_POST['IdConductores'];

    $Con=Conectar();
    $SQL="SELECT * FROM Conductores WHERE Id = '$IdConductores';";
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
        <label> Nombre: </label>
        <input type="text" id="Nombre" name="Nombre" value="<?php  print($Fila[1]); ?>">
        <label> Apellido: </label>
        <input type="text" id="Apellido" name="Apellido" value="<?php  print($Fila[2]); ?>">
        <label> Fecha de Nacimietno: </label>
        <input type="date" id="FechaNac" name="FechaNac" value="<?php  print($Fila[3]); ?>">
        <label>Firma: </label>
        <input type="file" id="Firma" name="Firma" value="<?php  print($Fila[4]); ?>">
        <label> Dirección: </label>
        <input type="number" id="Direccion" name="Direccion" value="<?php  print($Fila[5]); ?>">
        <input type="hidden" id="IdConductores" name="IdConductores" value="<?php  print($IdConductores); ?>">
        <input  type="submit">
    </form>
    <?php
    }
    desconectar($Con);
}
if(isset($_POST['Nombre'])){
    $Nombre=$_POST['Nombre'];
    $Apellido=$_POST['Apellido'];
    $FechaNac=$_POST['FechaNac'];
    $Firma=$_POST['Firma'];
    $Direccion=$_POST['Direccion'];
    $Con=Conectar();
    $SQL="UPDATE Conductores SET Nombre='$Nombre', Apellido='$Apellido', FechaNac= '$FechaNac', Firma= '$Firma', Direccion='$Direccion' WHERE Id ='$IdConductores';";
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
    <label> Id Conductor: </label>
    <input type="text" id="IdConductores" name="IdConductores">
    <input  type="submit">
</form>
<?php endif; ?>

<?php if(!$mostrar_formulario && isset($_POST['Nombre'])): ?>
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