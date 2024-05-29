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

if(isset($_POST['IdCentrosVerificacion'])){
    $IdCentrosVerificacion=$_POST['IdCentrosVerificacion'];

    $Con=Conectar();
    $SQL="SELECT * FROM Centros_verificacion WHERE Id = '$IdCentrosVerificacion';";
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
        <label> Razón Social: </label>
        <input type="text" id="RazonSocial" name="RazonSocial" value="<?php  print($Fila[1]); ?>">
        <label> Nombre: </label>
        <input type="text" id="Nombre" name="Nombre" value="<?php  print($Fila[2]); ?>">
        <label> Teléfono: </label>
        <input type="number" id="Telefono" name="Telefono" value="<?php  print($Fila[3]); ?>">
        <label> Dirección: </label>
        <input type="number" id="Direccion" name="Direccion" value="<?php  print($Fila[4]); ?>">
        <input type="hidden" id="IdCentrosVerificacion" name="IdCentrosVerificacion" value="<?php  print($IdCentrosVerificacion); ?>">
        <input  type="submit">
    </form>
    <?php
    }
    desconectar($Con);
}
if(isset($_POST['RazonSocial'])){
    $RazonSocial=$_POST['RazonSocial'];
    $Nombre=$_POST['Nombre'];
    $Telefono=$_POST['Telefono'];
    $Direccion=$_POST['Direccion'];
    $Con=Conectar();
    $SQL="UPDATE Centros_verificacion SET RazonSocial= '$RazonSocial', Nombre='$Nombre', Telefono='$Telefono', Direccion='$Direccion' WHERE Id ='$IdCentrosVerificacion';";
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
    <label> Id Centro de Verificacion: </label>
    <input type="text" id="IdCentrosVerificacion" name="IdCentrosVerificacion">
    <input  type="submit">
</form>
<?php endif; ?>

<?php if(!$mostrar_formulario && isset($_POST['RazonSocial'])): ?>
<form action="U_Centros_Verificacion.php">
    <button type="submit" class="button">Continuar</button>
</form>
<?php endif; ?>

</html>
<?php
    }else{
        header('location: Login.php');
    }
?>