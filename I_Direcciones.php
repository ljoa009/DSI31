<?php
    $NombreCalle = $_REQUEST['NombreCalle'];
    $Numero = $_REQUEST['Numero'];
    $Colonia = $_REQUEST['Colonia'];
    $Kilometro = $_REQUEST['Kilometro'];
    $CodigoPostal = $_REQUEST['CodigoPostal'];
    $Municipio = $_REQUEST['Municipio'];
    $Localidad = $_REQUEST['Localidad'];
    $Estado = $_REQUEST['Estado'];
    $Referencia = $_REQUEST['Referencia'];

    print("Nombre de la calle: ".$NombreCalle."<br>");
    print("Número: ".$Numero."<br>");
    print("Colonia: ".$Colonia."<br>");
    print("Kilómetro: ".$Kilometro."<br>");
    print("Código Postal: ".$CodigoPostal."<br>");
    print("Municipio: ".$Municipio."<br>");
    print("Localidad: ".$Localidad."<br>");
    print("Estado: ".$Estado."<br>");
    print("Referencia: ".$Referencia."<br>");

    $SQL = "INSERT INTO Direcciones (NombreCalle, Numero, Colonia, Kilometro, CodigoPostal, Municipio, Localidad, Estado, Referencia)VALUES('$NombreCalle','$Numero','$Colonia','$Kilometro','$CodigoPostal','$Municipio','$Localidad','$Estado','$Referencia');";

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