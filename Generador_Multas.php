<?php
require('fpdf.php');
require('Controlador.php');

$conexion = Conectar();

// Consulta a la base de datos para obtener los datos de las multas
$sql = "SELECT * FROM vistamulta";
$resultset = Ejecutar($conexion, $sql);

$pdf = new FPDF('p','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial', '', 8);
$pdf->SetAutoPageBreak(true, 10);
//$pdf->Image('Imagenes/FondoMulta.png',0,0,210,297);

// Iterar sobre los resultados y generar las multas
if ($resultset->num_rows > 0) {
    while($row = $resultset->fetch_assoc()) {
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(0, 10, 'SECRETARIA DE SEGURIDAD CIUDADANA', 0, 1, 'C');
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(0, 10, 'SUBSECRETARIA DE POLICIA ESTATAL', 0, 1, 'C');
        $pdf->Ln(10);
        
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(0, 10, 'Fecha: ' . $row['Fecha'], 0, 1);
        $pdf->Cell(0, 10, 'Hora: ' . $row['Hora'], 0, 1);
        $pdf->Cell(0, 10, 'No. de Multa: ' . $row['Folio'], 0, 1);
        $pdf->Ln(10);
        
        $pdf->Cell(0, 10, 'Conductor: ' . $row['ConductorNombre'] . ' ' . $row['ConductorApellido'], 0, 1);
        $pdf->Cell(0, 10, 'Licencia: ' . $row['NoLicencia'], 0, 1);
        $pdf->Cell(0, 10, 'Domicilio: ' . $row['Domicilio'], 0, 1);
        $pdf->Ln(10);
        
        $pdf->Cell(0, 10, 'Vehículo: ' . $row['VehiculoMarca'] . ' ' . $row['VehiculoModelo'], 0, 1);
        $pdf->Cell(0, 10, 'Año: ' . $row['VehiculoAño'], 0, 1);
        $pdf->Cell(0, 10, 'Placas: ' . $row['VehiculoPlacas'], 0, 1);
        $pdf->Ln(10);
        
        $pdf->Cell(0, 10, 'Motivo de la infracción: ' . $row['Motivo'], 0, 1);
        $pdf->Ln(10);
        
        $pdf->Cell(0, 10, 'Observaciones del Operativo: ' . $row['ObsPersonal'], 0, 1);
        $pdf->Ln(10);
        
        $pdf->Cell(0, 10, 'Agente: ' . $row['OficialNombre'] . ' ' . $row['OficialApellido'], 0, 1);
        $pdf->Cell(0, 10, 'Grupo, Region o Asignacion: ' . $row['OficialGRA'], 0, 1);
        $pdf->Cell(0, 10, 'No. de Agente: ' . $row['OficialId'], 0, 1);
        $pdf->Ln(10);
        
        $pdf->Cell(0, 10, 'Clasificación de la boleta: ' . $row['ClasBoleta'], 0, 1);
        $pdf->Cell(0, 10, 'Observaciones del Conductor: ' . $row['ObsConductor'], 0, 1);
        $pdf->Ln(20);
    }
} else {
    $pdf->Cell(0, 10, 'No se encontraron resultados', 0, 1);
}

// Cerrar conexión y generar el PDF
Desconectar($conexion);
$pdf->Output();
?>
