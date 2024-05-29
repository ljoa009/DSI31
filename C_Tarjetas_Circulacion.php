<?php
    session_start();
    if(isset($_SESSION['user'])){
?>
    <html>
    <head>
        <link rel="stylesheet" href="CSS/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <form action="C_Tarjetas_Circulacion.php">
    <label>Atributo que desea buscar: </label>
        <select id="Atributo" name="Atributo">
            <option value="" disabled selected>Selecciona una opción</option>
            <option value="Id">ID</option>
            <option value="Folio">Folio</option>
            <option value="Vigencia">Vigencia</option>
            <option value="Operacion">Operación</option>
            <option value="Folio_2">Folio #2</option>
            <option value="FechaExp">Fecha de Expedición</option>
            <option value="OficinaExpedidora">Oficina Expedidora</option>
            <option value="OE_Movimiento">Movimiento en la Oficina Expedidora</option>
            <option value="NumConstancia">Número de Constancia</option>
            <option value="Multa">Multa</option>
            <option value="Propietario">Propietario</option>
            <option value="Vehiculo">Vehículo</option>
        </select>
        <br>
    <label>Ingrese el valor del atributo: </label>
    <input type = "text" name = "Valor" id = "Valor">
    <input type="submit">
    </form>
<?php
        if (isset($_REQUEST['Valor'])){
            $Valor = $_REQUEST['Valor'];
            $Atributo = $_REQUEST['Atributo'];
            include("Controlador.php");
        // 1 y 2
        $Con = Conectar();

        //3
        $SQL = "SELECT * FROM TARJETAS_CIRCULACION WHERE $Atributo = '$Valor';";
        $ResultSet = Ejecutar($Con, $SQL);

        //4 Procesar Resultados
        
        // Imprimir la tabla HTML
        echo "<table border='1' align='center'>";
            
        // Imprimir el encabezado de la tabla
        if (mysqli_num_rows($ResultSet) > 0) {
            $Fila_Info = mysqli_fetch_fields($ResultSet);
            echo "<tr>";
            foreach ($Fila_Info as $Info) {
                echo "<th>{$Info->name}</th>";
            }
            echo "</tr>";

            // Imprimir filas de datos
            while ($fila = mysqli_fetch_assoc($ResultSet)) {
                echo "<tr>";
                foreach ($fila as $valor) {
                    echo "<td>$valor</td>";
                }
                echo "</tr>";
            }
        }

        // Cerrar la tabla HTML
        echo "</table>";

        $numResultados = mysqli_num_rows($ResultSet);
        echo "<p align='center'>$numResultados resultados encontrados</p>";

        //5
        Desconectar($Con);
        }  
    }else{
        header('location: Login.php');
    }
?>

