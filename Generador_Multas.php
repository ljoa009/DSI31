<?php
    session_start();
    if(isset($_SESSION['user'])){
        require('fpdf.php');

        $pdf = new FPDF('p','mm',array(54,86));

        $pdf->SetFont('Arial','',5);
        $pdf->AddPage();

        $pdf->SetAutoPageBreak(true, 0);

        $pdf->Image('Imagenes/Fondo.png',0,0,60,90);

        //Cabezera
        $pdf->Image('Imagenes/EscudoQro.png',5,3,10,null);
        $pdf->SetXY(18,6);
        $pdf->Cell(0,0,'Estados Unidos Mexicanos',0,'l',1,'',false);
        $pdf->SetXY(18,8);
        $pdf->SetFont('Arial','',4);
        $pdf->Cell(0,0,'Poder Ejecutivo del Estado de Queretaro',0,'l',2,'',false);
        $pdf->SetXY(18,10.5);
        $pdf->SetFont('Arial','B',4);
        $pdf->Cell(0,0,'Secretaria de Seguridad Ciudadana',0,'l',1,'',false);
        $pdf->SetXY(18,12.3);
        $pdf->SetFont('Arial','B',5);
        $pdf->Cell(0,0,'Licencia para Conducir',0,'l',1,'',false);

        //Persona
        $pdf->Image('Imagenes/Foto.png',27,17,23,23);
        $pdf->SetFont('Arial','B',3.5);
        $pdf->SetXY(15.5,31.5);
        $pdf->Cell(0,0,'No de Licencia',0,1,'r');
        $pdf->SetFont('Arial','B',7.5);
        $pdf->SetTextColor(255,0,0);
        $pdf->SetXY(9.5,35.4);
        $pdf->Cell(0,0,'Q119100-07',0,1,'r');
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Arial','B',4);
        $pdf->SetXY(12,39);
        $pdf->Cell(0,0,'AUTOMOVILISTA',0,1,'r');
        
        //Nombre
        $pdf->SetFont('Arial','',3.5); 
        $pdf->SetXY(44.5,42);  
        $pdf->Cell(0,0,'Nombre',0,1,'L');
        $pdf->SetFont('Arial','',8);
        $pdf->SetXY(37,44.5);
        $pdf->Cell(0,0,'OLALDE',0,1,'L');
        $pdf->SetXY(41.7,47.5);
        $pdf->Cell(0,0,'ABARCA',0,1,'L');
        $pdf->SetFont('Arial','B',8);
        $pdf->SetXY(38.7,50.5);
        $pdf->Cell(0,0,'LUIS JULIAN',0,1,'L');
        $pdf->SetFont('Arial','B',3.5);
        $pdf->SetXY(40.2,52.4);
        $pdf->Cell(0,0,'Observaciones',0,1,'L');

        //fechas
        $pdf->SetXY(3,54);
        $pdf->Cell(0,0,'Fecha de Nacimiento',0,1,'L');
        $pdf->SetXY(3,57.5);
        $pdf->Cell(0,0,'Fecha de Expedicion',0,1,'L');
        $pdf->SetXY(3,61);
        $pdf->Cell(0,0,'Valida hasta',0,1,'L');
        $pdf->SetXY(3,64.5);
        $pdf->Cell(0,0,'ANTIGUEDAD',0,1,'L');

        $pdf->SetFont('Arial','',5);
        $pdf->SetXY(3,55.5);
        $pdf->Cell(0,0,'24/09/2003',0,1,'L');
        $pdf->SetXY(3,59);
        $pdf->Cell(0,0,'10/04/2024',0,1,'L');
        $pdf->SetXY(3,66);
        $pdf->Cell(0,0,'10',0,1,'L');
        $pdf->SetFont('Arial','B',5);
        $pdf->SetXY(3,62.5);
        $pdf->Cell(0,0,'10/04/2030',0,1,'L');
        
        //Pie
        $pdf->Image('Imagenes/Cuadro.png',3,74,10,10);
        $pdf->SetXY(25,70);
        $pdf->SetFont('Arial','B',3);
        $pdf->Cell(0,0,'Firma',0,1,'L');
        $pdf->SetXY(5,79);
        $pdf->SetFont('Arial','B',15);
        $pdf->Cell(0,0,'A',0,1,'L');

        $pdf->SetXY(15,81);
        $pdf->SetFont('Arial','',3);
        $pdf->Cell(0,0,'AUTORIZO PARA QUE LA PRESENTE SEA',0,1,'L');
        $pdf->SetXY(15,82.4);
        $pdf->Cell(0,0,'RECABADA COMO GARANTIA DE INFRACCION',0,1,'L');
        $pdf->Image('Imagenes/Firma.png',24,72,7,7);
        //$pdf->Image('simbolo2.png',42,76,13,9);

        //DETRÁS

        $pdf->AddPage();

        $pdf->SetAutoPageBreak(true, 0);

        $pdf->Image('Imagenes/Fondo.png',0,0,60,90);
        //$pdf->Image('emergencias.png',2,2.3,7.5,0);
        //$pdf->Image('denuncia.jpg',44,2.3,7.5,0);
        //$pdf->Image('ovalo.png',11.5,2.5,30,5);

        $pdf->SetTextColor(255,255,255);
        $pdf->SetFont('Arial','B',6);
        $pdf->SetXY(16.5,5);
        $pdf->Cell(0,0,'1 2 3 4 5 6 7 8 A B',0,1,'L');

        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Arial','B',4);
        $pdf->SetXY(45,9);
        $pdf->Cell(0,0,'Domicilio',0,1,'L');
        $pdf->SetFont('Arial','B',5);
        $pdf->SetXY(40,12);
        $pdf->Cell(0,0,'TEPOZAN',0,1,'L'); //Lo agrega el usuario en el formulario
        $pdf->SetXY(48,14);
        $pdf->Cell(0,0,'624',0,1,'L'); //Lo agrega el usuario en el formulario
        $pdf->SetXY(32,16);
        $pdf->Cell(0,0,'FRACC. DEL BOSQUE',0,1,'L'); //Lo agrega el usuario en el formulario
        $pdf->SetXY(40,18);
        $pdf->Cell(0,0,'C.P. 76147',0,1,'L'); //Lo agrega el usuario en el formulario
        $pdf->SetXY(40,20);
        $pdf->Cell(0,0,'QUERETARO',0,1,'L'); 
        $pdf->SetXY(40,22);
        $pdf->AddPage();

        //$pdf->Image('carros.png',8,5,10,10);
        $pdf->Cell(0,5,'Restricciones',0,1,1,'L');
        $pdf->Cell(0,5,'9NINGUNA',0,1,1,'L'); //Lo agrega el usuario en el formulario
        $pdf->Cell(0,5,'Grupo Sanguineo',0,1,1,'L');
        $pdf->Cell(0,5,'O+',0,1,1,'L'); //Lo agrega el usuario en el formulario
        $pdf->Cell(0,5,'DonadordeOrganos',0,1,1,'L');
        $pdf->Cell(0,5,'SI',0,1,1,'L'); //Lo agrega el usuario en el formulario
        $pdf->Cell(0,5,'Número de Emergencias',0,1,1,'L');
        $pdf->Cell(0,5,'000-442-356-1345',0,1,1,'L'); //Lo agrega el usuario en el formulario

        //$pdf->Image('firma2.png',8,5,10,10);
        $pdf->Cell(0,5,'MTRO. EN GPA MIGUEL ANGEL CONTRERAS ALVAREZ',0,1,1,'L');
        $pdf->Cell(0,5,'SECRETARIA DE SEGURIDAD CIUDADANA',0,1,1,'L');
        $pdf->Cell(0,5,'Fundamento Legal',0,1,1,'L');
        $pdf->Cell(0,5,'Articulo 19 seccion',0,1,1,'L');
        //$pdf->Image('escudo2.jpg',8,5,10,10);

        $pdf->Output();
    }else{
        header('location: Login.php');
    }
?>
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
        $pdf->Cell(0, 10, 'Domicilio: ' . $row['ConductorCalle'], 0, 1);
        $pdf->Ln(10);
        
        $pdf->Cell(0, 10, 'Vehículo: ' . $row['VehiculoMarca'] . ' ' . $row['VehiculoModelo'], 0, 1);
        $pdf->Cell(0, 10, 'Año: ' . $row['VehiculoAño'], 0, 1);
        $pdf->Cell(0, 10, 'Placas: ' . $row['VehiculoPlaca'], 0, 1);
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
