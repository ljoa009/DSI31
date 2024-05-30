<?php
session_start();
if (isset($_SESSION['user'])) {
 if (isset($_GET['id'])) {
    $idMulta = $_GET['id'];

    require('fpdf.php');
    require('Controlador.php');

    $conexion = Conectar();

    // Consulta a la base de datos para obtener los datos de las multas
    $sql = "SELECT * FROM vistamulta WHERE MultaId = $idMulta";
    $resultset = Ejecutar($conexion, $sql);

     $pdf = new FPDF('P', 'mm', array(108, 250));  // Cambiar ancho a 108 mm
    $pdf->AddPage();
    //$pdf->Image('Imagenes/FondoMulta.jpg', 0, 0, 108, 350);  // Ajustar imagen de fondo si es necesario
    $pdf->SetFont('Arial', '', 8);
    $pdf->SetAutoPageBreak(true, 10);
    $pdf->Image('Imagenes/Foto_Multa.png', 1, 0, 30, 30);  // Ajustar la posición de la imagen

    // Establecer el encabezado fuera del recuadro
    $pdf->SetFont('Arial', 'B', 10);  // Reducir tamaño de fuente
    $pdf->SetXY(28, 10);  // Ajustar la posición X e Y
    $pdf->Cell(0, 8, 'SECRETARIA DE SEGURIDAD CIUDADANA', 0, 1, 'L');
    $pdf->SetFont('Arial', '', 10);  // Reducir tamaño de fuente
    $pdf->SetX(28);
    $pdf->Cell(0, 5, 'SUBSECRETARIA DE POLICIA ESTATAL', 0, 1, 'L');
    $pdf->Ln(10);  // Reducir espacio entre líneas

    $pdf->SetFont('Arial', '', 8); // Ajustar el tamaño de la fuente según sea necesario
    $pdf->SetX(5); // Ajustar el margen izquierdo según sea necesario
    $pdf->MultiCell(0, 5, 'Con fundamento en los articulos 31 fraccion II de la Ley de Transito para el Estado de Queretaro y 6 fraccion II, inciso g) del Reglamento de la Ley de Transito para el Estado de Queretaro, se emite la presente boleta de infraccion: ', 0, 'J');
    $pdf->Ln(5);  // Reducir el espacio

    // Crear XML
    $xml = new SimpleXMLElement('<multa/>');

    // Iterar sobre los resultados y generar las multas
    if ($resultset->num_rows > 0) {
        while ($row = $resultset->fetch_assoc()) {
            // Agregar datos al PDF
            // Guardar la posición actual del Y
            $startY = $pdf->GetY();
            
            // Dibujar el rectángulo para los datos
            $pdf->Rect(5, $startY, 98, 25); // Coord. X, Coord. Y, Ancho, Alto
            // Establecer los datos de la multa dentro del rectángulo
            $pdf->SetFont('Arial','',8);
            $pdf->SetXY(7, $startY + 2); 
            // Posiciona el cursor para el texto dentro del rectángulo
            $pdf->Cell(0, 5, 'Fecha: ' . $row['Fecha'], 0, 1);
            $pdf->SetX(7); 
            $pdf->Cell(0, 5, 'Hora: ' . $row['Hora'], 0, 1);
            $pdf->SetX(7); 
            $pdf->Cell(0, 5, 'No. de Multa: ' . $row['Folio'], 0, 1);
            // Ajustar la posición Y para evitar superposición con el siguiente elemento
            $startY += 30;

            // Dibujar el rectángulo para los datos
            $pdf->Rect(5, $startY, 98, 25); // Coord. X, Coord. Y, Ancho, Alto
            // Establecer los datos de la multa dentro del rectángulo
            $pdf->SetFont('Arial','',8);
            $pdf->SetXY(7, $startY + 2); 
            // Posiciona el cursor para el texto dentro del rectángulo
            $pdf->Cell(0, 5, 'Conductor: ' . $row['ConductorNombre'] . ' ' . $row['ConductorApellido'], 0, 1);
            $pdf->SetX(7); 
            $pdf->Cell(0, 5, 'Licencia: ' . $row['NoLicencia'], 0, 1);
            $pdf->SetX(7); 
            $pdf->Cell(0, 5, 'Domicilio: ' . $row['ConductorCalle'], 0, 1);
            // Ajustar la posición Y para evitar superposición con el siguiente elemento
            $startY += 30;

            // Dibujar el rectángulo para los datos
            $pdf->Rect(5, $startY, 98, 25); // Coord. X, Coord. Y, Ancho, Alto
            // Establecer los datos de la multa dentro del rectángulo
            $pdf->SetFont('Arial','',8);
            $pdf->SetXY(7, $startY + 2); 
            // Posiciona el cursor para el texto dentro del rectángulo
            $pdf->Cell(0, 5, 'Vehiculo: ' . $row['VehiculoMarca'] . ' ' . $row['VehiculoModelo'], 0, 1);
            $pdf->SetX(7); 
            $pdf->Cell(0, 5, 'Anio: ' . $row['VehiculoAño'], 0, 1);
            $pdf->SetX(7); 
            $pdf->Cell(0, 5, 'Placas: ' . $row['VehiculoPlaca'], 0, 1);
            // Ajustar la posición Y para evitar superposición con el siguiente elemento
            $startY += 30;

            // Dibujar el rectángulo para los datos
            $pdf->Rect(5, $startY, 98, 25); // Coord. X, Coord. Y, Ancho, Alto
            // Establecer los datos de la multa dentro del rectángulo
            $pdf->SetFont('Arial','',8);
            $pdf->SetXY(7, $startY + 2); 
            // Posiciona el cursor para el texto dentro del rectángulo
            $pdf->Cell(0, 5, 'Motivo de la infraccion: ' . $row['Motivo'], 0, 1);
            $pdf->SetX(7); 
            $pdf->Cell(0, 5, 'Observaciones del Operativo: ' . $row['ObsPersonal'], 0, 1);
            $pdf->SetX(7); 
            $pdf->Cell(0, 5, 'Garantia: ' . $row['Garantia'], 0, 1);
            // Ajustar la posición Y para evitar superposición con el siguiente elemento
            $startY += 30;

            // Dibujar el rectángulo para los datos
            $pdf->Rect(5, $startY, 98, 25); // Coord. X, Coord. Y, Ancho, Alto
            // Establecer los datos de la multa dentro del rectángulo
            $pdf->SetFont('Arial','',8);
            $pdf->SetXY(7, $startY + 2); 
            // Posiciona el cursor para el texto dentro del rectángulo
            $pdf->Cell(0, 5, 'Agente: ' . $row['OficialNombre'] . ' ' . $row['OficialApellido'], 0, 1);
            $pdf->SetX(7); 
            $pdf->Cell(0, 5, 'Grupo, Region o Asignacion: ' . $row['OficialGRA'], 0, 1);
            $pdf->SetX(7); 
            $pdf->Cell(0, 5, 'No. de Agente: ' . $row['OficialId'], 0, 1);
            // Ajustar la posición Y para evitar superposición con el siguiente elemento
            $startY += 30;

            // Dibujar el rectángulo para los datos
            $pdf->Rect(5, $startY, 98, 25); // Coord. X, Coord. Y, Ancho, Alto
            // Establecer los datos de la multa dentro del rectángulo
            $pdf->SetFont('Arial','',8);
            $pdf->SetXY(7, $startY + 2); 
            // Posiciona el cursor para el texto dentro del rectángulo
            $pdf->Cell(0, 5, 'Clasificación de la boleta: ' . $row['ClasBoleta'], 0, 1);
            $pdf->SetX(7); 
            $pdf->Cell(0, 5, 'Observaciones del Conductor: ' . $row['ObsConductor'], 0, 1);
            // Ajustar la posición Y para evitar superposición con el siguiente elemento
            $startY += 30;

            // Agregar datos al XML
            $multa = $xml->addChild('multa');
            $multa->addChild('Fecha', $row['Fecha']);
            $multa->addChild('Hora', $row['Hora']);
            $multa->addChild('Folio', $row['Folio']);
            $multa->addChild('ConductorNombre', $row['ConductorNombre']);
            $multa->addChild('ConductorApellido', $row['ConductorApellido']);
            $multa->addChild('NoLicencia', $row['NoLicencia']);
            $multa->addChild('ConductorCalle', $row['ConductorCalle']);
            $multa->addChild('VehiculoMarca', $row['VehiculoMarca']);
            $multa->addChild('VehiculoModelo', $row['VehiculoModelo']);
            $multa->addChild('VehiculoAño', $row['VehiculoAño']);
            $multa->addChild('VehiculoPlaca', $row['VehiculoPlaca']);
            $multa->addChild('Motivo', $row['Motivo']);
            $multa->addChild('ObsPersonal', $row['ObsPersonal']);
            $multa->addChild('Garantia', $row['Garantia']);
            $multa->addChild('OficialNombre', $row['OficialNombre']);
            $multa->addChild('OficialApellido', $row['OficialApellido']);
            $multa->addChild('OficialGRA', $row['OficialGRA']);
            $multa->addChild('OficialId', $row['OficialId']);
            $multa->addChild('ClasBoleta', $row['ClasBoleta']);
            $multa->addChild('ObsConductor', $row['ObsConductor']);
        }
    } else {
        $pdf->Cell(0, 10, 'No se encontraron resultados', 0, 1);
    }

    // Guardar el XML en un archivo
    $xml->asXML('multa_' . $idMulta . '.xml');

    // Cerrar conexión y generar el PDF
    Desconectar($conexion);
    $pdf->Output();
} else {
    echo "ID de Multa no proporcionado.";
}
} else {
    header('Location: Login.php');
}
?>
