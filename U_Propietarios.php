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

if(isset($_POST['IdPropietario'])){
    $IdPropietario=$_POST['IdPropietario'];

    $Con=Conectar();
    $SQL="SELECT * FROM Propietarios WHERE Id = '$IdPropietario';";
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
        <label> RFC: </label>
        <input type="text" id="RFC" name="RFC" value="<?php  print($Fila[3]); ?>">
        <label> Sexo: </label>
        <input type="radio" id="Sexo" name="Sexo" value="Masculino" <?php if($Fila[4] == "Masculino") echo "checked"; ?>>Masculino
        <input type="radio" id="Sexo" name="Sexo" value="Femenino" <?php if($Fila[4] == "Femenino") echo "checked"; ?>>Femenino
        <br>
        <label> Estado de Procedencia: </label>
        <select id="EdoProcedencia" name="EdoProcedencia">
            <option value="" disabled selected>Selecciona una opción</option>
            <option value="Aguascalientes" <?php if($Fila[5] == "Aguascalientes") echo "selected"; ?>>Aguascalientes</option>
            <option value="Baja California" <?php if($Fila[5] == "Baja California") echo "selected"; ?>>Baja California</option>
            <option value="Baja California Sur" <?php if($Fila[5] == "Baja California Sur") echo "selected"; ?>>Baja California Sur</option>
            <option value="Campeche" <?php if($Fila[5] == "Campeche") echo "selected"; ?>>Campeche</option>
            <option value="Chiapas" <?php if($Fila[5] == "Chiapas") echo "selected"; ?>>Chiapas</option>
            <option value="Chihuahua" <?php if($Fila[5] == "Chihuahua") echo "selected"; ?>>Chihuahua</option>
            <option value="Coahuila" <?php if($Fila[5] == "Coahuila") echo "selected"; ?>>Coahuila</option>
            <option value="Colima" <?php if($Fila[5] == "Colima") echo "selected"; ?>>Colima</option>
            <option value="Durango" <?php if($Fila[5] == "Durango") echo "selected"; ?>>Durango</option>
            <option value="Estado de México" <?php if($Fila[5] == "Estado de México") echo "selected"; ?>>Estado de México</option>
            <option value="Guanajuato" <?php if($Fila[5] == "Guanajuato") echo "selected"; ?>>Guanajuato</option>
            <option value="Guerrero" <?php if($Fila[5] == "Guerrero") echo "selected"; ?>>Guerrero</option>
            <option value="Hidalgo" <?php if($Fila[5] == "Hidalgo") echo "selected"; ?>>Hidalgo</option>
            <option value="Jalisco" <?php if($Fila[5] == "Jalisco") echo "selected"; ?>>Jalisco</option>
            <option value="Michoacán" <?php if($Fila[5] == "Michoacán") echo "selected"; ?>>Michoacán</option>
            <option value="Morelos" <?php if($Fila[5] == "Morelos") echo "selected"; ?>>Morelos</option>
            <option value="Nayarit" <?php if($Fila[5] == "Nayarit") echo "selected"; ?>>Nayarit</option>
            <option value="Nuevo León" <?php if($Fila[5] == "Nuevo León") echo "selected"; ?>>Nuevo León</option>
            <option value="Oaxaca" <?php if($Fila[5] == "Oaxaca") echo "selected"; ?>>Oaxaca</option>
            <option value="Puebla" <?php if($Fila[5] == "Puebla") echo "selected"; ?>>Puebla</option>
            <option value="Querétaro" <?php if($Fila[5] == "Querétaro") echo "selected"; ?>>Querétaro</option>
            <option value="Quintana Roo" <?php if($Fila[5] == "Quintana Roo") echo "selected"; ?>>Quintana Roo</option>
            <option value="San Luis Potosí" <?php if($Fila[5] == "San Luis Potosí") echo "selected"; ?>>San Luis Potosí</option>
            <option value="Sinaloa" <?php if($Fila[5] == "Sinaloa") echo "selected"; ?>>Sinaloa</option>
            <option value="Sonora" <?php if($Fila[5] == "Sonora") echo "selected"; ?>>Sonora</option>
            <option value="Tabasco" <?php if($Fila[5] == "Tabasco") echo "selected"; ?>>Tabasco</option>
            <option value="Tamaulipas" <?php if($Fila[5] == "Tamaulipas") echo "selected"; ?>>Tamaulipas</option>
            <option value="Tlaxcala" <?php if($Fila[5] == "Tlaxcala") echo "selected"; ?>>Tlaxcala</option>
            <option value="Veracruz" <?php if($Fila[5] == "Veracruz") echo "selected"; ?>>Veracruz</option>
            <option value="Yucatán" <?php if($Fila[5] == "Yucatán") echo "selected"; ?>>Yucatán</option>
            <option value="Zacatecas" <?php if($Fila[5] == "Zacatecas") echo "selected"; ?>>Zacatecas</option>
        </select>
        <label> Dirección: </label>
        <input type="number" id="Direccion" name="Direccion" value="<?php  print($Fila[6]); ?>">
        <input type="hidden" id="IdPropietario" name="IdPropietario" value="<?php  print($IdPropietario); ?>">
        <input  type="submit">
    </form>
    <?php
    }
    desconectar($Con);
    
}
if(isset($_POST['Nombre'])){
    $Nombre=$_POST['Nombre'];
    $Apellido=$_POST['Apellido'];
    $RFC=$_POST['RFC'];
    $Sexo=$_POST['Sexo'];
    $EdoProcedencia=$_POST['EdoProcedencia'];
    $Direccion=$_POST['Direccion'];
    $Con=Conectar();
    $SQL="UPDATE Propietarios SET Nombre='$Nombre', Apellido='$Apellido', RFC='$RFC', Sexo='$Sexo', EdoProcedencia='$EdoProcedencia', Direccion='$Direccion' WHERE Id ='$IdPropietario';";
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
    <label> Id Propietario: </label>
    <input type="text" id="IdPropietario" name="IdPropietario">
    <input  type="submit">
</form>
<?php endif; ?>

<?php if(!$mostrar_formulario && isset($_POST['Nombre'])): ?>
<form action="U_Propietarios.php">
    <button type="submit" class="button">Continuar</button>
</form>
<?php endif; ?>

</html>