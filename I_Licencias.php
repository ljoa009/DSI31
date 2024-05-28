<?php
    $NoLicencia = $_GET['NoLicencia'];
    $Categoria = $_GET['Categoria'];
    $FechaExp = $_GET['FechaExp'];
    $Vigencia = $_GET['Vigencia'];
    $Antiguedad = $_GET['Antiguedad'];
    $EdoProcedencia = $_GET['EdoProcedencia'];
    $Clase = $_GET['Clase'];
    $GrupoSanguineo = $_GET['GrupoSanguineo'];
    $Restriccion = $_GET['Restriccion'];
    $Donante = $_GET['Donante'];
    $Observacion = $_GET['Observacion'];
    $NoEmergencia = $_GET['NoEmergencia'];
    $Conductor = $_GET['Conductor'];

    print("Número de Licencia: ".$NoLicencia."<br>");
    print("Categoría: ".$Categoria."<br>");
    print("Fecha de Expedición: ".$FechaExp."<br>");
    print("Vigencia: ".$Vigencia."<br>");
    print("Antigüedad: ".$Antiguedad."<br>");
    print("Estado de Procedencia: ".$EdoProcedencia."<br>");
    print("Clase: ".$Clase."<br>");
    print("Grupo Sanguíneo: ".$GrupoSanguineo."<br>");
    print("Restricción: ".$Restriccion."<br>");
    print("Donante: ".$Donante."<br>");
    print("Observación: ".$Observacion."<br>");
    print("Número de Emergencia: ".$NoEmergencia."<br>");
    print("Conductor: ".$Conductor."<br>");

    $SQL = "INSERT INTO Licencias VALUES ('','$NoLicencia','$Categoria','$FechaExp','$Vigencia','$Antiguedad','$EdoProcedencia','$Clase','$GrupoSanguineo','$Restriccion','$Donante','$Observacion','$NoEmergencia','$Conductor');";

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
