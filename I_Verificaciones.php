<?php
    $Folio = $_POST['Folio'];
    $Fecha = $_POST['Fecha'];
    $Dictamen = $_POST['Dictamen'];
    $Tecnico = $_POST['Tecnico'];
    $HoraEntrada = $_POST['HoraEntrada'];
    $HoraSalida = $_POST['HoraSalida'];
    $FolioPrueba = $_POST['FolioPrueba'];
    $Vigencia = $_POST['Vigencia'];
    $Semestre = $_POST['Semestre'];
    $Tipo = $_POST['Tipo'];
    $Linea = $_POST['Linea'];
    $Niv = $_POST['Niv'];
    $Motivo = $_POST['Motivo'];
    $Centro = $_POST['Centro'];
    $TarjetaCirculacion = $_POST['TarjetaCirculacion'];

    print("Folio: ".$Folio."<br>");
    print("Fecha: ".$Fecha."<br>");
    print("Dictamen: ".$Dictamen."<br>");
    print("Técnico: ".$Tecnico."<br>");
    print("Hora de Entrada: ".$HoraEntrada."<br>");
    print("Hora de Salida: ".$HoraSalida."<br>");
    print("Folio de Prueba: ".$FolioPrueba."<br>");
    print("Vigencia: ".$Vigencia."<br>");
    print("Semestre: ".$Semestre."<br>");
    print("Tipo: ".$Tipo."<br>");
    print("Línea: ".$Linea."<br>");
    print("Número de Identificación Vehicular: ".$Niv."<br>");
    print("Motivo: ".$Motivo."<br>");
    print("Centro: ".$Centro."<br>");
    print("Tarjeta de Circulación: ".$TarjetaCirculacion."<br>");

    $SQL = "INSERT INTO Verificaciones VALUES ('','$Folio','$Fecha,'$Dictamen','$Tecnico','$HoraEntrada','$HoraSalida','$FolioPrueba','$Vigencia','$Semestre','$Tipo','$Linea','$Niv','$Motivo','$Centro','$TarjetaCirculacion');"; 

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