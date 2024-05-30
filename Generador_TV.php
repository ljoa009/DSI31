<?php
session_start();
if (isset($_SESSION['user'])) {
  if (isset($_GET['id'])) {
    $idVerificacion = $_GET['id'];

    require ('fpdf.php');
    require ('Controlador.php');

    $conexion = Conectar();

    // Consulta a la base de datos para obtener los datos de las licencias
    $sql = "SELECT * FROM vistatv WHERE VerificacionID = '$idVerificacion'";
    $resultset = Ejecutar($conexion, $sql);
    $Fila = mysqli_fetch_assoc($resultset); // Obtiene los datos como un array asociativo
    if (!$Fila || !is_array($Fila)) {
      die('Error: No se encontraron registros para el ID proporcionado.');
    }

    if (!isset($Fila['VerificacionDictamen'], $Fila['VerificacionLinea'], $Fila['VehiculoPlaca'], $Fila['VehiculoNoSerie'], $Fila['VehiculoClase'], $Fila['VehiculoCombustible'], $Fila['VehiculoCilindraje'], $Fila['VehiculoTipo'], $Fila['TarjetaMunicipio'], $Fila['VerificacionID'], $Fila['VerificacionFolio'], $Fila['VerificacionHoraEntrada'], $Fila['VerificacionHoraSalida'], $Fila['VerificacionMotivo'], $Fila['VerificacionFolioPrueba'], $Fila['VerificacionSemestre'], $Fila['VerificacionVigencia'], $Fila['VerificacionTecnico'])) {
      die('Error: Algunos campos requeridos no están presentes en el resultado de la consulta.');
    }

    $pdf = new FPDF('L', 'mm', array(279, 150));
    $pdf->AddPage();

    $pdf->SetXY(20, 30);
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(0, 5, 'DATOS DEL VEHICULO', 0, 1, 'L');

    $pdf->SetXY(20, 35);
    $pdf->SetFont('Arial', '', 10);

    $pdf->Cell(100, 5, 'TIPO DE SERVICIO', 0, 0);
    $pdf->SetXY(80, 35);
    $pdf->Cell(0, 5, $Fila['TarjetaFolio'], 0, 1);

    $marca = explode(" ", $Fila['VehiculoMarca']);

    $pdf->SetXY(20, 40);
    $pdf->Cell(100, 5, 'MARCA', 0, 0);
    $pdf->SetXY(80, 40);
    $pdf->Cell(0, 5, $marca[0], 0, 1);


    $pdf->SetXY(20, 50);
    $pdf->Cell(100, 5, 'MODELO', 0, 0);
    $pdf->SetXY(80, 50);
    $pdf->Cell(0, 5, $Fila['VehiculoModelo'], 0, 1);

    $pdf->SetXY(20, 55);
    $pdf->Cell(100, 5, 'PLACAS', 0, 0);
    $pdf->SetXY(80, 55);
    $pdf->Cell(0, 5, $Fila['VehiculoPlaca'], 0, 1);

    // Espacio entre secciones
    $pdf->Ln(5);

    // Segundo dato
    $pdf->SetXY(160, 35);
    $pdf->Cell(0, 5, 'NUMERO DE SERIE:', 0, 0);
    $pdf->SetXY(210, 35);
    $pdf->Cell(0, 5, $Fila['VehiculoNoSerie'], 0, 1);
    $pdf->SetXY(160, 40);
    $pdf->Cell(0, 5, 'CLASE:', 0, 0);
    $pdf->SetXY(210, 40);
    $pdf->Cell(0, 5, $Fila['VehiculoClase'], 0, 1);
    $pdf->SetXY(160, 45);
    $pdf->Cell(0, 5, 'TIPO COMBUSTIBLE:', 0, 0);
    $pdf->SetXY(210, 45);
    $pdf->Cell(0, 5, $Fila['VehiculoCombustible'], 0, 1);
    $pdf->SetXY(160, 50);
    $pdf->Cell(0, 5, 'NIV:', 0, 0);
    $pdf->SetXY(210, 50);
    $pdf->Cell(0, 5, $Fila['VerificacionNiv'], 0, 1);
    $pdf->SetXY(160, 55);
    $pdf->Cell(0, 5, 'NUM CILINDRAJE:', 0, 0);
    $pdf->SetXY(210, 55);
    $pdf->Cell(0, 5, $Fila['VehiculoCilindraje'], 0, 1);
    $pdf->SetXY(160, 60);
    $pdf->Cell(0, 5, 'TIPO CARROCERIA:', 0, 0);
    $pdf->SetXY(210, 60);
    $pdf->Cell(0, 5, $Fila['VehiculoTipo'], 0, 1);
    $pdf->SetXY(160, 68);

    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(0, 5, 'ENTIDAD FEDERATIVA:', 0, 0);
    $pdf->SetXY(210, 68);
    $pdf->Cell(0, 5, 'Querétaro', 0, 1);
    $pdf->SetXY(160, 73);
    $pdf->Cell(0, 5, 'MUNICIPIO:', 0, 0);
    $pdf->SetXY(210, 73);
    $pdf->Cell(0, 5, $Fila['TarjetaMunicipio'], 0, 1);

    // Espacio entre secciones
    $pdf->Ln(5);

    // Tercer dato
    $pdf->SetX(20);
    $pdf->Cell(0, 5, 'NO. DEL CENTRO:', 0, 0);
    $pdf->SetX(100);
    $pdf->Cell(0, 5, $Fila['CentroNombre'], 0, 1);
    $pdf->SetFont('Arial', '', 10);
    $pdf->SetX(20);
    $pdf->Cell(0, 5, 'NO. DE LINEA DE VERICACION:', 0, 0);
    $pdf->SetX(100);
    $pdf->Cell(0, 5, 'LINEA 1', 0, 1);
    $pdf->SetX(20);
    $pdf->Cell(0, 5, 'TECNICO:', 0, 0);
    $pdf->SetX(100);
    $pdf->Cell(0, 5, $Fila['VerificacionTecnico'], 0, 1);
    $pdf->SetX(20);

    $fecha = date("Y-m-d");
    $pdf->Cell(0, 5, 'FECHA:', 0, 0);
    $pdf->SetX(100);
    $pdf->Cell(0, 5, $fecha, 0, 1);
    $pdf->SetX(20);
    $pdf->Cell(0, 5, 'HORA ENTRADA:', 0, 0);
    $pdf->SetX(100);
    $pdf->Cell(0, 5, $Fila['VerificacionHoraEntrada'], 0, 1);
    $pdf->SetX(20);
    $pdf->Cell(0, 5, 'HORA SALIDA:', 0, 0);
    $pdf->SetX(100);
    $pdf->Cell(0, 5, $Fila['VerificacionHoraSalida'], 0, 1);
    $pdf->SetX(20);
    $pdf->Cell(0, 5, 'MOTIVO:', 0, 0);
    $pdf->SetX(100);
    $pdf->Cell(0, 5, $Fila['VerificacionDictamen'], 0, 1);
    $pdf->SetX(20);
    $pdf->Cell(0, 5, 'FOLIO:', 0, 0);
    $pdf->SetX(100);
    $pdf->Cell(0, 5, $Fila['VerificacionFolio'], 0, 1);
    $pdf->SetX(20);
    $pdf->Cell(0, 5, 'SEMESTRE:', 0, 0);
    $pdf->SetX(100);
    $pdf->Cell(0, 5, $Fila['VerificacionSemestre'], 0, 1);

    $pdf->SetXY(215, 90);
    $pdf->Cell(0, 5, 'FOLIO:', 0, 0);
    $pdf->SetXY(215, 95);
    $pdf->Cell(0, 5, $Fila['VerificacionID'], 0, 1);

    $pdf->SetXY(215, 100);
    $pdf->Cell(0, 5, 'VIGENCIA:', 0, 0);
    $pdf->SetXY(215, 105);
    $pdf->Cell(0, 5, $Fila['VerificacionVigencia'], 0, 1);

    $pdf->Image('Imagenes/LogosQro.png', 10, 5, 60, 15);
    $pdf->Image('Imagenes/Texto.png', 80, 5, 140, 15);
    $pdf->Image('Imagenes/QR.png', 170, 80, 35, 35);
    $pdf->Image('Imagenes/Barras.png', 160, 120, 90, 15);
    $pdf->Image('Imagenes/Bandera.png', 0, 140, 280, 5);
    $pdf->Output('I', 'Verificacion.pdf');

    // --- XML generation ---
    $dom = new DOMDocument('1.0', 'UTF-8');
    $dom->formatOutput = true;

    $root = $dom->createElement('Verificacion');
    $dom->appendChild($root);

    foreach ($Fila as $key => $value) {
      $child = $dom->createElement($key, $value);
      $root->appendChild($child);
    }

    $xmlFileName = 'Verificacion_' . $idTarjetaVerificacion . '.xml';
    $dom->save($xmlFileName);

    // Cerrar conexión
    Desconectar($conexion);

  } else {
    echo "ID de Tarjeta de Verificacion no proporcionada.";
  }
}else {
    header('Location: Login.php');
}
?>