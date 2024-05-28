<?php
    $Folio = $_REQUEST['Folio'];
    $Fecha = $_REQUEST['Fecha'];
    $Hora = $_REQUEST['Hora'];
    $ReporteSeccion = $_REQUEST['ReporteSeccion'];
    $Motivo = $_REQUEST['Motivo'];
    $ArticuloBase = $_REQUEST['ArticuloBase'];
    $Garantia = $_REQUEST['Garantia'];
    $Convenio = $_REQUEST['Convenio'];
    $PuestoADisposicion = $_REQUEST['PuestoADisposicion'];
    $ObsPersonal = $_REQUEST['ObsPersonal'];
    $ObsConductor = $_REQUEST['ObsConductor'];
    $ClasBoleta = $_REQUEST['ClasBoleta'];
    $Direccion = $_REQUEST['Direccion'];
    $Licencia = $_REQUEST['Licencia'];
    $Oficial = $_REQUEST['Oficial'];

    print("Folio: ".$Folio."<br>");
    print("Fecha: ".$Fecha."<br>");
    print("Hora: ".$Hora."<br>");
    print("Reporte Seccion: ".$ReporteSeccion."<br>");
    print("Motivo: ".$Motivo."<br>");
    print("Articulo Base: ".$ArticuloBase."<br>");
    print("Garantia: ".$Garantia."<br>");
    print("Convenio: ".$Convenio."<br>");
    print("Puesto a Disposicion: ".$PuestoADisposicion."<br>");
    print("Observacion Personal: ".$ObsPersonal."<br>");
    print("Obsservacion del Conductor: ".$ObsConductor."<br>");
    print("Clasificacion de la Boleta: ".$ClasBoleta."<br>");
    print("Direccion: ".$Direccion."<br>");
    print("Licencia: ".$Licencia."<br>");
    print("Oficial: ".$Oficial."<br>");

    $SQL = "INSERT INTO Multas VALUES ('','$Folio','$Fecha','$Hora','$ReporteSeccion','$Motivo','$ArticuloBase','$Garantia','$Convenio','$PuestoADisposicion','$ObsPersonal','$ObsConductor','$ClasBoleta','$Direccion','$Licencia','$Oficial');";

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
