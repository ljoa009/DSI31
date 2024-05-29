<?php
require('fpdf.php');

require('Controlador.php');

$conexion = Conectar();

// Consulta a la base de datos para obtener los datos de las licencias
$sql = "SELECT * FROM vistalicencia";
$resultset = Ejecutar($conexion, $sql);

$pdf = new FPDF('p','mm',array(54,85.6));
$pdf->AddPage();
$pdf->SetFont('Arial', '', 3);
$pdf->SetAutoPageBreak(false, 0.3);
$pdf->Image('Imagenes/Fondo.png',0,0,60,90);

// Escribir información en la tarjeta
$pdf->SetFont('Arial','B',8);
$pdf->Text(12, 5, 'Estados Unidos Mexicanos');
$pdf->SetFont('Arial','B',5);
$pdf->Text(12, 7, 'Poder Ejecutivo del Estado de Queretaro');
$pdf->SetFont('Arial','',5);
$pdf->Text(12, 9, 'SECRETARIA DE');
$pdf->SetFont('Arial','B',5);
$pdf->Text(27, 9, 'SEGURIDAD CIUDADANA');
$pdf->SetFont('Arial','B',5);
$pdf->Text(13, 12, 'LICENCIA PARA CONDUCIR');
$pdf->Ln(8);

// Iterar sobre los resultados y generar las licencias
if ($resultset->num_rows > 0) {
    while($row = $resultset->fetch_assoc()) {
        $pdf->Image('Imagenes/EscudoQro.png', 3, 2, 7, 0);
        $pdf->Image('Imagenes/Foto.png',30, 13, 23, 0);
        $pdf->SetFont('Arial','',3);
        $pdf->SetXY(10,26);
        $pdf->Cell(19, 3, 'No. de Licencia', 0, 1, 'R');
        $pdf->SetFont('Arial','',7);
        $pdf->SetTextColor(255, 0, 0);
        $pdf->Cell(19, 3, $row['NoLicencia'], 0, 1, 'R');
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Ln(6);
        $pdf->SetFont('Arial','',4);
        $pdf->Cell(42, 3, 'Nombre', 0, 1, 'R');
        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(42, 3, $row['ApellidoConductor'], 0, 1, 'R');
        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(42, 3, $row['NombreConductor'], 0, 1, 'R');
        $pdf->SetFont('Arial','',4);
        $pdf->Cell(42, 3, 'Observaciones ', 0, 1, 'R');
        $pdf->SetFont('Arial','B',4);
        $pdf->Cell(42, 3, $row['Observaciones'], 0, 1, 'R');
        $pdf->SetTextColor(0, 0, 0);
        $pdf->SetXY(2,45);
        $pdf->SetFont('Arial','',4);
        $pdf->Cell(0, 1, 'Fecha de Nacimiento', 0, 1);
        $pdf->SetX(2);
        $pdf->SetFont('Arial','B',4);
        $pdf->Cell(0, 3,  $row['FechaNac'], 0, 1);
        $pdf->SetX(2);
        $pdf->SetFont('Arial','',4);
        $pdf->Cell(0, 1, 'Fecha de Expedicion', 0, 2);
        $pdf->SetX(2);
        $pdf->SetFont('Arial','B',4);
        $pdf->Cell(0, 3, $row['FechaExp'], 0, 1);
        $pdf->SetX(2); 
        $pdf->SetFont('Arial','',4);       
        $pdf->Cell(0, 1, 'Valida hasta', 0, 1);
        $pdf->SetX(2);
        $pdf->SetFont('Arial','B',4);
        $pdf->Cell(0, 3, $row['Vigencia'], 0, 1);
        $pdf->SetX(2);
        $pdf->SetFont('Arial','',4);
        $pdf->Cell(0, 1, 'Antiguedad', 0, 1);
        $pdf->SetX(2);
        $pdf->SetFont('Arial','B',4);
        $pdf->Cell(0, 3, $row['Antigüedad'], 0, 1);
        $pdf->SetX(5);
        $pdf->SetFont('Arial','',4);
        $pdf->Cell(0, 1, 'Firma', 0, 1);
        $pdf->SetX(5);
        $pdf->SetFont('Arial','B',4);

        // Cargar imagen de la firma desde la base de datos
        if (!empty($row['Firma'])) {
                $pdf->Image($row['Firma'], 5, 63, 7, 0);
            } else {
                $pdf->Cell(0, 3, 'Sin firma', 0, 1);
            }

        $pdf->SetFont('Arial','',3);
        $pdf->SetX(5);
        $pdf->SetFont('Arial','B',2);
        $pdf->Ln(6);
        $pdf->SetX(5);
        $pdf->Cell(6, 1, 'Autorizo para que la presente', 0, 1, 'C');
        $pdf->SetX(5);
        $pdf->Cell(6, 1, 'sea recabada como garantia', 0, 1, 'C');
        $pdf->SetX(5);
        $pdf->Cell(6, 1, 'de infraccion', 0, 1, 'C');
        $pdf->Ln(2);
        // Establecer el color de fondo amarillo
        $pdf->SetFillColor(255, 255, 0);
        // Dibujar un rectángulo con fondo amarillo para el texto
        $pdf->Rect(3, 76, 6, 6, 'F');
        // Colocar el texto encima del rectángulo
        $pdf->SetFont('Arial','B',7);
        $pdf->SetXY(4,77.5);
        $pdf->Cell(3, 3, $row['Clase'], 0, 1);
        // Agregar pagina para la parte trasera de la licencia
        $pdf->AddPage();
        $pdf->Image('Imagenes/Fondo.png',0,0,60,90);

        // Inicio de la parte trasera 
        $pdf->Image('Imagenes/Emergencias.png', 30, 3, 8, 0);
        $pdf->Image('Imagenes/089.png', 40, 3, 10, 0);
        $pdf->Ln(4);
        //Datos de la parte trasera 
        $pdf->SetFont('Arial','B',4);  
        $pdf->SetX(42);     
        $pdf->Cell(10, 2, 'Domicilio', 0, 1, 'R');
        $pdf->SetFont('Arial','',4);  
        $pdf->SetX(42);  
        $pdf->Cell(10, 2, $row['NombreCalle'], 0, 1, 'R');
        $pdf->SetX(42);  
        $pdf->Cell(10, 2, 'Ext. ' . $row['Numero'] . ' Int. ' . $row['Numero'], 0, 1, 'R');
        $pdf->SetX(42);  
        $pdf->Cell(10, 2, 'Col. ' . $row['Colonia'], 0, 1, 'R');
        $pdf->SetX(42);  
        $pdf->Cell(10, 2, 'C.P. ' . $row['CodigoPostal'] . ' ' . $row['Estado'], 0, 1, 'R');
        $pdf->Ln(4);

        $pdf->SetX(42);
        $pdf->SetFont('Arial','',4);
        $pdf->Cell(10, 3, 'Grupo Sanguineo', 0, 1, 'R');
        $pdf->SetX(42);
        $pdf->SetFont('Arial','B',4);
        $pdf->Cell(10, 2, $row['GrupoSang'], 0, 1, 'R');
        $pdf->SetX(42);
        $pdf->SetFont('Arial','',4);
        $pdf->Cell(10, 3, 'Donador de Organos', 0, 1, 'R');
        $pdf->SetX(42);
        $pdf->SetFont('Arial','B',4);
        $pdf->Cell(10, 2, $row['Donante'], 0, 1, 'R');
        $pdf->SetX(42);
        $pdf->SetFont('Arial','',4);
        $pdf->Cell(10, 3, 'Numero de Emergencias', 0, 1, 'R');
        $pdf->SetX(42);
        $pdf->SetFont('Arial','B',4);
        $pdf->Cell(10, 2, $row['NoEmergencia'], 0, 1, 'R');
        $pdf->Ln(4);
        $pdf->SetX(3);
        $pdf->SetFont('Arial','',3);
        $pdf->Cell(10, 2, 'Fundamento legal', 0, 1);
        $pdf->SetX(3);

        // Texto del párrafo
        $texto = "Por cumplir las evaluaciones y requisitos establecidos en los artículos 139 y 140 del Reglamento de la Ley de Tránsito para el Estado de Querétaro y, en ejercicio de las facultades que me confieren los artículos 33, fracción VII de la Ley Orgánica del Poder Ejecutivo del Estado de Querétaro, así como 12, fracción XV de la Ley de Tránsito para el Estado de Querétaro, expido la presente licencia de conducir, que autoriza al titular la";

        // Ancho y altura de la celda
        $ancho_celda = 49;
        $altura_celda = 2;

        // Imprimir el párrafo en la celda
        $pdf->SetFont('Arial','',3);
        $pdf->MultiCell($ancho_celda, $altura_celda, utf8_decode($texto));
        $pdf->Image("Imagenes/QroJuntos.png", 28, 72, 20, 0);
        $pdf->Image("Imagenes/SDSC.png", 7, 71, 20, 0);
        $pdf->Image("Imagenes/Firma.png", 21, 60, 12, 0);
        $pdf->Ln(8);                                                                                        
        $pdf->SetX(18);
        $pdf->SetFont('Arial','',3);
        $pdf->Cell(20,1, 'CMTE. GIOVANI ELIAS PEREZ HERNANDEZ', 0, 1, 'C');
        $pdf->SetX(18);
        $pdf->Cell(20,1, 'SECRETARIO DE SEGURIDAD CIUDADANA', 0, 1, 'C');

        // Agregar un salto de línea entre cada licencia
        $pdf->Ln(3);
    }
} else {
    $pdf->Cell(0, 3, 'No se encontraron resultados', 0, 1);
}

// Cerrar conexión y generar el PDF
Desconectar($conexion);
$pdf->Output();
?>