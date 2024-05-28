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

if(isset($_POST['IdOficial'])){
    $IdOficial=$_POST['IdOficial'];

    $Con=Conectar();
    $SQL="SELECT * FROM Oficiales WHERE Id = '$IdOficial';";
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
        <label>Firma: </label>
        <input type="file" id="Firma" name="Firma" value="<?php  print($Fila[3]); ?>">
        <label> Grupo, región o asignación: </label>
        <input type="text" id="G_R_A" name="G_R_A" value="<?php  print($Fila[4]); ?>">
        <input type="hidden" id="IdOficial" name="IdOficial" value="<?php  print($IdOficial); ?>">
        <input  type="submit">
    </form>
    <?php
    }
    desconectar($Con);
    
}
if(isset($_POST['Nombre'])){
    $Nombre=$_POST['Nombre'];
    $Apellido=$_POST['Apellido'];
    $Firma=$_POST['Firma'];
    $G_R_A=$_POST['G_R_A'];
    $Con=Conectar();
    $SQL="UPDATE Oficiales SET Nombre='$Nombre', Apellido='$Apellido', Firma= '$Firma', G_R_A= '$G_R_A' WHERE Id ='$IdOficial';";
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
    <label> Id Oficial: </label>
    <input type="text" id="IdOficial" name="IdOficial">
    <input  type="submit">
</form>
<?php endif; ?>

<?php if(!$mostrar_formulario && isset($_POST['Nombre'])): ?>
<form action="U_Oficiales.php">
    <button type="submit" class="button">Continuar</button>
</form>
<?php endif; ?>

</html>