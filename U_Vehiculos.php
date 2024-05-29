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

if(isset($_POST['IdVehiculos'])){
    $IdVehiculos=$_POST['IdVehiculos'];

    $Con=Conectar();
    $SQL="SELECT * FROM Vehiculos WHERE Id = '$IdVehiculos';";
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
        <label> Número de Serie: </label>
        <input type="text" id="NoSerie" name="NoSerie" value="<?php print($Fila[1]); ?>">
        <label> Placa: </label>
        <input type="text" id="Placa" name="Placa" value="<?php print($Fila[2]); ?>">
        <label> Tipo de Servicio: </label>
        <input type="text" id="T_Servicio" name="T_Servicio" value="<?php print($Fila[3]); ?>">
        <label> Marca: </label>
        <input type="text" id="Marca" name="Marca" value="<?php print($Fila[4]); ?>">
        <label> Modelo: </label>
        <input type="number" id="Modelo" name="Modelo" value="<?php print($Fila[5]); ?>">
        <label> Origen: </label>
        <input type="text" id="Origen" name="Origen" value="<?php print($Fila[6]); ?>">
        <label> Color: </label>
        <input type="text" id="Color" name="Color" value="<?php print($Fila[7]); ?>">
        <label> Cilindraje: </label>
        <input type="number" id="Cilindraje" name="Cilindraje" value="<?php print($Fila[8]); ?>">
        <label> Capacidad: </label>
        <input type="number" id="Capacidad" name="Capacidad" value="<?php print($Fila[9]); ?>">
        <label> Clase: </label>
        <input type="text" id="Clase" name="Clase" value="<?php print($Fila[10]); ?>">
        <label> Tipo: </label>
        <input type="text" id="Tipo" name="Tipo" value="<?php print($Fila[11]); ?>">
        <label> Uso: </label>
        <input type="text" id="Uso" name="Uso" value="<?php print($Fila[12]); ?>">
        <label> Puerta: </label>
        <input type="number" id="Puerta" name="Puerta" value="<?php print($Fila[13]); ?>">
        <label> Asiento: </label>
        <input type="number" id="Asiento" name="Asiento" value="<?php print($Fila[14]); ?>">
        <label> Combustible: </label>
        <input type="text" id="Combustible" name="Combustible" value="<?php print($Fila[15]); ?>">
        <label> Transmisión: </label>
        <input type="text" id="Transmision" name="Transmision" value="<?php print($Fila[16]); ?>">
        <label> Número de Motor: </label>
        <input type="text" id="NoMotor" name="NoMotor" value="<?php print($Fila[17]); ?>">
        <input type="hidden" id="IdVehiculos" name="IdVehiculos" value="<?php  print($IdVehiculos); ?>">
        <input  type="submit">
    </form>
    <?php
    }
    desconectar($Con);
}
if(isset($_POST['NoSerie'])){
    $NoSerie = $_POST['NoSerie'];
    $Placa = $_POST['Placa'];
    $T_Servicio = $_POST['T_Servicio'];
    $Marca = $_POST['Marca'];
    $Modelo = $_POST['Modelo'];
    $Origen = $_POST['Origen'];
    $Color = $_POST['Color'];
    $Cilindraje = $_POST['Cilindraje'];
    $Capacidad = $_POST['Capacidad'];
    $Clase = $_POST['Clase'];
    $Tipo = $_POST['Tipo'];
    $Uso = $_POST['Uso'];
    $Puerta = $_POST['Puerta'];
    $Asiento = $_POST['Asiento'];
    $Combustible = $_POST['Combustible'];
    $Transmision = $_POST['Transmision'];
    $NoMotor = $_POST['NoMotor'];
    $Con=Conectar();
    $SQL="UPDATE Vehiculos SET NoSerie='$NoSerie', Placa='$Placa', T_Servicio='$T_Servicio', Marca='$Marca', Modelo='$Modelo', Origen='$Origen', Color='$Color', Cilindraje='$Cilindraje', Capacidad='$Capacidad', Clase='$Clase', Tipo='$Tipo', Uso='$Uso', Puerta='$Puerta', Asiento='$Asiento', Combustible='$Combustible', Transmision='$Transmision', NoMotor='$NoMotor' WHERE Id ='$IdVehiculos';";
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
    <label> Id Vehículo: </label>
    <input type="text" id="IdVehiculos" name="IdVehiculos">
    <input  type="submit">
</form>
<?php endif; ?>

<?php if(!$mostrar_formulario && isset($_POST['NoSerie'])): ?>
<form action="U_Vehiculos.php">
    <button type="submit" class="button">Continuar</button>
</form>
<?php endif; ?>

</html>
<?php
    }else{
        header('location: Login.php');
    }
?>
