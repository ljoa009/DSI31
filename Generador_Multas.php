<?php
  session_start();
  if(isset($_SESSION['user'])){

          require('fpdf.php');
          require('Controlador.php');
        
          $conexion = Conectar();

          // Consulta a la base de datos para obtener los datos de las multas
          $sql = "SELECT * FROM vistamulta WHERE MultaId=3";
          $resultset = Ejecutar($conexion, $sql);

          $pdf = new FPDF('P', 'mm', array(216,350));
          $pdf->AddPage();
         //$pdf->Image('Imagenes/FondoMulta.jpg', 0, 0, 216, 350);
          $pdf->SetFont('Arial', '', 8);
          $pdf->SetAutoPageBreak(true, 10);
          $pdf->Image('Imagenes/Foto_Multa.png',10,0,40,40);

          // Establecer el encabezado fuera del recuadro
          $pdf->SetFont('Arial','B',20);
          $pdf->SetXY(50,15);
          $pdf->Cell(0, 10, 'SECRETARIA DE SEGURIDAD CIUDADANA', 0, 1, 'L');
          $pdf->SetFont('Arial','',20);
          $pdf->SetX(50);
          $pdf->Cell(0, 5, 'SUBSECRETARIA DE POLICIA ESTATAL', 0, 1, 'L');
          $pdf->Ln(15);

          $pdf->SetFont('Arial','',9); // Ajusta el tamaño de la fuente según sea necesario
          $pdf->SetX(10); // Ajusta el margen izquierdo según sea necesario
          $pdf->MultiCell(0, 5, 'Con fundamento en los articulos 31 fraccion II de la Ley de Transito para el Estado de Queretaro y 6 fraccion II, inciso g) del Reglamento de la Ley de Transito para el Estado de Queretaro, se emite la presente boleta de infraccion: ', 0, 'L');
          $pdf->Ln(10);

          // Iterar sobre los resultados y generar las multas
          if ($resultset->num_rows > 0) {
              while($row = $resultset->fetch_assoc()) {

                  // Guardar la posición actual del Y
                  $startY = $pdf->GetY();
                  
                  // Dibujar el rectángulo para los datos
                  $pdf->Rect(10, $startY, 190, 30); // Coord. X, Coord. Y, Ancho, Alto
                  // Establecer los datos de la multa dentro del rectángulo
                  $pdf->SetFont('Arial','',10);
                  $pdf->SetXY(15, $startY + 5); 
                  // Posiciona el cursor para el texto dentro del rectángulo
                  $pdf->Cell(0, 7, 'Fecha: ' . $row['Fecha'], 0, 1);
                  $pdf->SetX(15); 
                  $pdf->Cell(0, 7, 'Hora: ' . $row['Hora'], 0, 1);
                  $pdf->SetX(15); 
                  $pdf->Cell(0, 7, 'No. de Multa: ' . $row['Folio'], 0, 1);
                  // Ajustar la posición Y para evitar superposición con el siguiente elemento
                  $startY += 40;

                  // Dibujar el rectángulo para los datos
                  $pdf->Rect(10, $startY, 190, 30); // Coord. X, Coord. Y, Ancho, Alto
                 // Establecer los datos de la multa dentro del rectángulo
                  $pdf->SetFont('Arial','',10);
                  $pdf->SetXY(15, $startY + 5); 
                  // Posiciona el cursor para el texto dentro del rectángulo
                  $pdf->Cell(0, 7, 'Conductor: ' . $row['ConductorNombre'] . ' ' . $row['ConductorApellido'], 0, 1);
                  $pdf->SetX(15); 
                  $pdf->Cell(0, 7, 'Licencia: ' . $row['NoLicencia'], 0, 1);
                  $pdf->SetX(15); 
                  $pdf->Cell(0, 7, 'Domicilio: ' . $row['ConductorCalle'], 0, 1);
                  // Ajustar la posición Y para evitar superposición con el siguiente elemento
                  $startY += 40;

                  // Dibujar el rectángulo para los datos
                  $pdf->Rect(10, $startY, 190, 30); // Coord. X, Coord. Y, Ancho, Alto
                 // Establecer los datos de la multa dentro del rectángulo
                  $pdf->SetFont('Arial','',10);
                  $pdf->SetXY(15, $startY + 5); 
                  // Posiciona el cursor para el texto dentro del rectángulo
                  $pdf->Cell(0, 7, 'Vehiculo: ' . $row['VehiculoMarca'] . ' ' . $row['VehiculoModelo'], 0, 1);
                  $pdf->SetX(15); 
                  $pdf->Cell(0, 7, 'Anio: ' . $row['VehiculoAño'], 0, 1);
                  $pdf->SetX(15); 
                  $pdf->Cell(0, 7, 'Placas: ' . $row['VehiculoPlaca'], 0, 1);
                  // Ajustar la posición Y para evitar superposición con el siguiente elemento
                  $startY += 40;

                   // Dibujar el rectángulo para los datos
                  $pdf->Rect(10, $startY, 190, 30); // Coord. X, Coord. Y, Ancho, Alto
                 // Establecer los datos de la multa dentro del rectángulo
                  $pdf->SetFont('Arial','',10);
                  $pdf->SetXY(15, $startY + 5); 
                  // Posiciona el cursor para el texto dentro del rectángulo
                  $pdf->Cell(0, 7, 'Motivo de la infraccion: ' . $row['Motivo'], 0, 1);
                  $pdf->SetX(15); 
                  $pdf->Cell(0, 7, 'Observaciones del Operativo: ' . $row['ObsPersonal'], 0, 1);
                  $pdf->SetX(15); 
                  $pdf->Cell(0, 7, 'Garantia: ' . $row['Garantia'], 0, 1);
                  // Ajustar la posición Y para evitar superposición con el siguiente elemento
                  $startY += 40;

                  // Dibujar el rectángulo para los datos
                  $pdf->Rect(10, $startY, 190, 30); // Coord. X, Coord. Y, Ancho, Alto
                 // Establecer los datos de la multa dentro del rectángulo
                  $pdf->SetFont('Arial','',10);
                  $pdf->SetXY(15, $startY + 5); 
                  // Posiciona el cursor para el texto dentro del rectángulo
                  $pdf->Cell(0, 7, 'Agente: ' . $row['OficialNombre'] . ' ' . $row['OficialApellido'], 0, 1);
                  $pdf->SetX(15); 
                  $pdf->Cell(0, 7, 'Grupo, Region o Asignacion: ' . $row['OficialGRA'], 0, 1);
                  $pdf->SetX(15); 
                  $pdf->Cell(0, 7, 'No. de Agente: ' . $row['OficialId'], 0, 1);
                  // Ajustar la posición Y para evitar superposición con el siguiente elemento
                  $startY += 40;

                   // Dibujar el rectángulo para los datos
                  $pdf->Rect(10, $startY, 190, 30); // Coord. X, Coord. Y, Ancho, Alto
                 // Establecer los datos de la multa dentro del rectángulo
                  $pdf->SetFont('Arial','',10);
                  $pdf->SetXY(15, $startY + 5); 
                  // Posiciona el cursor para el texto dentro del rectángulo
                  $pdf->Cell(0, 10, 'Clasificación de la boleta: ' . $row['ClasBoleta'], 0, 1);
                  $pdf->SetX(15); 
                  $pdf->Cell(0, 10, 'Observaciones del Conductor: ' . $row['ObsConductor'], 0, 1);
                  // Ajustar la posición Y para evitar superposición con el siguiente elemento
                  $startY += 40;
                   
              }
          } else {
              $pdf->Cell(0, 10, 'No se encontraron resultados', 0, 1);
          }

          // Cerrar conexión y generar el PDF
          Desconectar($conexion);
          $pdf->Output();

    }else{
        header('location: Login.php');
    }
?>
