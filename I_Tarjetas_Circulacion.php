<?php
    $Folio = $_GET['Folio'];
    $Vigencia = $_GET['Vigencia'];
    $Operacion = $_GET['Operacion'];
    $Folio_2 = $_GET['Folio_2'];
    $FechaExp = $_GET['FechaExp'];
    $OficinaExpedidora = $_GET['OficinaExpedidora'];
    $OE_Movimiento = $_GET['OE_Movimiento'];
    $NumConstancia = $_GET['NumConstancia'];
    $Multa = $_GET['Multa'];
    $Propietario = $_GET['Propietario'];
    $Vehiculo = $_GET['Vehiculo'];

    print("Folio: ".$Folio."<br>");
    print("Vigencia: ".$Vigencia."<br>");
    print("Operación: ".$Operacion."<br>");
    print("Folio_2: ".$Folio_2."<br>");
    print("Fecha de Expedición: ".$FechaExp."<br>");
    print("Oficina Expedidora: ".$OficinaExpedidora."<br>");
    print("Oficina Expedidora Movimiento: ".$OE_Movimiento."<br>");
    print("Número de Constancia: ".$NumConstancia."<br>");
    print("Multa: ".$Multa."<br>");
    print("Propietario: ".$Propietario."<br>");
    print("Vehículo: ".$Vehiculo."<br>");

    $SQL = "INSERT INTO Tarjetas_Circulacion VALUES ('','$Folio','$Vigencia','$Operacion','$Folio_2','$FechaExp','$OficinaExpedidora','$OE_Movimiento','$NumConstancia','$Multa','$Propietario','$Vehiculo');";

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