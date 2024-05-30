<?php
session_start();
if (isset($_SESSION['user'])) {
    if (isset($_GET['id'])) {
        $idTarjetaCirculacion = $_GET['id'];

        require('fpdf.php');
        require('Controlador.php');

        $conexion = Conectar();

        // Consulta a la base de datos para obtener los datos de las licencias
        $sql = "SELECT * FROM vistatc WHERE TarjetaCirculacionId = $idTarjetaCirculacion";
        $resultset = Ejecutar($conexion, $sql);
        $Fila = mysqli_fetch_assoc($resultset); // Obtiene los datos como un array asociativo
        if (!$Fila || !is_array($Fila)) {
            die('Error: No se encontraron registros para el ID proporcionado.');
        }

        $pdf = new FPDF('L', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial', '', 12);

        $tiposervicio = 'Tipo de Servicio: ' . $Fila['T_Servicio'];
        $holograma = 'Holograma: ESTAMPA';
        $folio = 'Folio: ' . $Fila['Folio'];
        $vigencia = 'Vigencia: ' . $Fila['Vigencia'];
        $placa = 'Placa: ' . $Fila['Placa'];
        $rfc = 'RFC: ' . $Fila['PropietarioRFC'];
        $numserie = 'Número de Serie: ' . $Fila['NoSerie'];
        $modelo = 'Modelo: ' . $Fila['Modelo'];
        //$localidad = 'Localidad: ' . $Fila['DIRECCION'];
        $marcalineasublinea = 'Marca/Línea/Sublínea: ' . $Fila['Marca'];
        $operacion = 'Operación: ' . $Fila['Operacion'];
        //$municipio = 'Municipio: ' .
        //$municipio = 'Municipio: ' . $Fila['MUNICIPIO'];
        //$placaant = 'Placa Anterior: ' . $Fila['PLACAANT'];
        $NCI = 'NCI: ' . $Fila['Folio_2'];
        $cilindraje = 'Cilindraje: ' . $Fila['Cilindraje'];
        $cvvvehicular = 'CVV Vehicular: ' . $Fila['NoSerie'];
        $fechaexpedicion = 'Fecha de Expedición: ' . $Fila['FechaExp'];
        $puertas = 'Puertas: ' . $Fila['Puerta'];
        $clase = 'Clase: ' . $Fila['Clase'];
        $asientos = 'Asientos: ' . $Fila['Asiento'];
        $tipo = 'Tipo: ' . $Fila['Tipo'];
        $oficinaexpendidora = 'Oficina Expendidora: ' . $Fila['OficinaExpedidora'];
        $origen = 'Origen: ' . $Fila['Origen'];
        $color = 'Color: ' . $Fila['Color'];
        $combustible = 'Combustible: ' . $Fila['Combustible'];
        $transmicion = 'Transmisión: ' . $Fila['Transmision'];
        $uso = 'Uso: ' . $Fila['Uso'];
        //$rpa = 'RPA: ' . $Fila['RPA'];
        $movimiento = 'Movimiento: ' . $Fila['OE_Movimiento'];
        $nummotor = 'Número de Motor: ' . $Fila['NoMotor'];
        $fabricacion = 'Fabricación: HECHO EN MÉXICO';

        $pdf->SetXY(10, 30);
        $pdf->Cell(0, 10, utf8_decode($tiposervicio), 0, 1);

        $pdf->SetXY(110, 30);
        $pdf->Cell(0, 10, utf8_decode($holograma), 0, 1);

        $pdf->SetXY(160, 30);
        $pdf->Cell(0, 10, utf8_decode($folio), 0, 1);

        $pdf->SetXY(200, 30);
        $pdf->Cell(0, 10, utf8_decode($vigencia), 0, 1);

        $pdf->SetXY(250, 30);
        $pdf->Cell(0, 10, utf8_decode($placa), 0, 1);

        $pdf->SetXY(10, 50);
        $pdf->Cell(0, 10, utf8_decode($rfc), 0, 1);

        $pdf->SetXY(80, 50);
        $pdf->Cell(0, 10, utf8_decode($numserie), 0, 1);

        $pdf->SetXY(160, 50);
        $pdf->Cell(0, 10, utf8_decode($modelo), 0, 1);

        //$pdf->SetXY(10, 62);
        //$pdf->Cell(0, 10, utf8_decode($localidad), 0, 1);

        $pdf->SetXY(80, 62);
        $pdf->Cell(0, 10, utf8_decode($marcalineasublinea), 0, 1);

        $pdf->SetXY(160, 62);
        $pdf->Cell(0, 10, utf8_decode($operacion), 0, 1);

        //$pdf->SetXY(10, 74);
        //$pdf->Cell(0, 10, utf8_decode($municipio), 0, 1);

        $pdf->SetXY(160, 74);
        $pdf->Cell(0, 10, utf8_decode($NCI), 0, 1);

        //$pdf->SetXY(160, 86);
        //$pdf->Cell(0, 10, utf8_decode($placaant), 0, 1);

        $pdf->SetXY(10, 98);
        $pdf->Cell(0, 10, utf8_decode($cilindraje), 0, 1);

        $pdf->SetXY(60, 98);
        $pdf->Cell(0, 10, utf8_decode($cvvvehicular), 0, 1);

        $pdf->SetXY(160, 98);
        $pdf->Cell(0, 10, utf8_decode($fechaexpedicion), 0, 1);

        $pdf->SetXY(60, 110);
        $pdf->Cell(0, 10, utf8_decode($puertas), 0, 1);

        $pdf->SetXY(100, 110);
        $pdf->Cell(0, 10, utf8_decode($clase), 0, 1);

        $pdf->SetXY(160, 110);
        $pdf->Cell(0, 10, utf8_decode($oficinaexpendidora), 0, 1);

        $pdf->SetXY(10, 122);
        $pdf->Cell(0, 10, utf8_decode($origen), 0, 1);

        $pdf->SetXY(60, 122);
        $pdf->Cell(0, 10, utf8_decode($asientos), 0, 1);

        $pdf->SetXY(100, 122);
        $pdf->Cell(0, 10, utf8_decode($tipo), 0, 1);

        $pdf->SetXY(160, 122);
        $pdf->Cell(0, 10, utf8_decode($movimiento), 0, 1);

        $pdf->SetXY(60, 136);
        $pdf->Cell(0, 10, utf8_decode($combustible), 0, 1);

        $pdf->SetXY(120, 136);
        $pdf->Cell(0, 10, utf8_decode($uso), 0, 1);

        $pdf->SetXY(10, 148);
        $pdf->Cell(0, 10, utf8_decode($color), 0, 1);

        $pdf->SetXY(60, 148);
        $pdf->Cell(0, 10, utf8_decode($transmicion), 0, 1);

        //$pdf->SetXY(120, 148);
        //$pdf->Cell(0, 10, utf8_decode($rpa), 0, 1);

        $pdf->SetXY(160, 148);
        $pdf->Cell(0, 10, utf8_decode($nummotor), 0, 1);

        $pdf->SetXY(160, 160);
        $pdf->Cell(0, 10, utf8_decode($fabricacion), 0, 1);

        $pdf->Image('Imagenes/Fondo_1.png', 0, 170, 234, 5);
        $pdf->Image('Imagenes/LogosQro.png', 0, 175, 234, 35);
        $pdf->Image('Imagenes/QR.png', 232, 146, 65, 65);
        $pdf->Image('Imagenes/Logos.jpg', 0, 0, 60, 30);
        $pdf->Image('Imagenes/Bandera.png', 60, 10, 300, 10);

        $pdf->SetXY(60, 3);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 5, 'TARJETA DE CIRCULACION', 0, 1);

        $pdf->Output('I', 'TarjetaCirculacion.pdf');

        // Agregar un salto de línea entre cada Tarjeta
        $pdf->Ln(3);

        // --- XML generation ---
        $dom = new DOMDocument('1.0', 'UTF-8');
        $dom->formatOutput = true;

        $root = $dom->createElement('TarjetaCirculacion');
        $dom->appendChild($root);

        $root->appendChild($dom->createElement('Id', $Fila['Id']));
        $root->appendChild($dom->createElement('T_Servicio', $Fila['T_Servicio']));
        $root->appendChild($dom->createElement('Folio', $Fila['Folio']));
        $root->appendChild($dom->createElement('Vigencia', $Fila['Vigencia']));
        $root->appendChild($dom->createElement('Placa', $Fila['Placa']));
        $root->appendChild($dom->createElement('PropietarioRFC', $Fila['PropietarioRFC']));
        $root->appendChild($dom->createElement('NoSerie', $Fila['NoSerie']));
        $root->appendChild($dom->createElement('Modelo', $Fila['Modelo']));
        $root->appendChild($dom->createElement('Marca', $Fila['Marca']));
        $root->appendChild($dom->createElement('Operacion', $Fila['Operacion']));
        $root->appendChild($dom->createElement('Folio_2', $Fila['Folio_2']));
        $root->appendChild($dom->createElement('Cilindraje', $Fila['Cilindraje']));
        $root->appendChild($dom->createElement('FechaExp', $Fila['FechaExp']));
        $root->appendChild($dom->createElement('Puerta', $Fila['Puerta']));
        $root->appendChild($dom->createElement('Clase', $Fila['Clase']));
        $root->appendChild($dom->createElement('Asiento', $Fila['Asiento']));
        $root->appendChild($dom->createElement('Tipo', $Fila['Tipo']));
        $root->appendChild($dom->createElement('OficinaExpedidora', $Fila['OficinaExpedidora']));
        $root->appendChild($dom->createElement('Origen', $Fila['Origen']));
        $root->appendChild($dom->createElement('Color', $Fila['Color']));
        $root->appendChild($dom->createElement('Combustible', $Fila['Combustible']));
        $root->appendChild($dom->createElement('Transmision', $Fila['Transmision']));
        $root->appendChild($dom->createElement('Uso', $Fila['Uso']));
        $root->appendChild($dom->createElement('OE_Movimiento', $Fila['OE_Movimiento']));
        $root->appendChild($dom->createElement('NoMotor', $Fila['NoMotor']));

        $xmlFileName = 'TarjetaCirculacion_' . $IdTarjetaCirculacion . '.xml';
        $dom->save($xmlFileName);

        // Cerrar conexión
        Desconectar($conexion);
    } else {
        echo "ID de Tarjeta de Circulacion no proporcionado.";
    }
} else {
    header('Location: Login.php');
}
?>
