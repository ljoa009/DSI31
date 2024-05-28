


<?php
    if (isset($_REQUEST['Valor'])){
        $Valor = $_REQUEST['Valor'];
        $Atributo = $_REQUEST['Atributo'];
        include("Controlador.php");
    // 1 y 2
    $Con = Conectar();

    //3
    $SQL = "SELECT * FROM CENTROS_VERIFICACION WHERE $Atributo = '$Valor';";
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
?>