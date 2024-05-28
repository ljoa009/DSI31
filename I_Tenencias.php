<?php
    $Transaccion = $_REQUEST['Transaccion'];
    $LineaCaptura = $_REQUEST['LineaCaptura'];
    $T_InstrumentoP = $_REQUEST['T_InstrumentoP'];
    $FechaLimite = $_REQUEST['FechaLimite'];
    $Importe = $_REQUEST['Importe'];
    $FechaActual = $_REQUEST['FechaActual'];
    $Hora = $_REQUEST['Hora'];
    $Nota = $_REQUEST['Nota'];
    $TarjetaCirculacion = $_REQUEST['TarjetaCirculacion'];

    print("Transacción: ".$Transaccion."<br>");
    print("Línea de Captura: ".$LineaCaptura."<br>");
    print("Tipo de Instrumento de Pago: ".$T_InstrumentoP."<br>");
    print("Fecha Límite: ".$FechaLimite."<br>");
    print("Importe: ".$Importe."<br>");
    print("Fecha Actual: ".$FechaActual."<br>");
    print("Hora: ".$Hora."<br>");
    print("Nota: ".$Nota."<br>");
    print("Tarjeta de Circulación: ".$TarjetaCirculacion."<br>");

    $SQL = "INSERT INTO Tenencias VALUES ('','$Transaccion','$LineaCaptura','$T_InstrumentoP','$FechaLimite','$Importe','$FechaActual','$Hora','$Nota','$TarjetaCirculacion');";

    include("Controlador.php");
    $Con = Conectar();
    $Resultset = Ejecutar($Con, $SQL);
    if($Resultset == 1){
        print("Registro Insertado");
    }else{
        print("Registro no Insertado");
    }
    Desconectar($Con);
?>