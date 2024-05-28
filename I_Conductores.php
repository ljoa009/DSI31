<?php
    $Nombre = $_REQUEST['Nombre'];
    $Apellido = $_REQUEST['Apellido'];
    $FechaNac = $_REQUEST['FechaNac'];
    $Firma = $_REQUEST['Firma'];
    $Direccion = $_REQUEST['Direccion'];

    print("Nombre: ".$Nombre."<br>");
    print("Apellido: ".$Apellido."<br>");
    print("Fecha de Nacimiento: ".$FechaNac."<br>");
    print("Firma: ".$Firma."<br>");
    print("Dirección: ".$Direccion."<br>");

    $SQL = "INSERT INTO Conductores (Nombre, Apellido, FechaNac, Firma, Direccion)VALUES('$Nombre','$Apellido','$FechaNac','$Firma','$Direccion');";

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