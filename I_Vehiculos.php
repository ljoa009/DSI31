<?php
    session_start();
    if(isset($_SESSION['user'])){
        $NoSerie = $_POST['NoSerie'];
        $Placa = $_POST['Placa'];
        $T_Servicio = $_POST['T_Servicio'];
        $Marca = $_POST['Marca'];
        $Modelo = $_POST['Modelo'];
        $Origen = $_POST['Origen'];
        $Color = $_POST['Color'];
        $Cilindraje = $_POST['Cilindraje'];
        $Capacidad = $_POST['Capacidad'];
        $Clase = $_POST['Clase'];
        $Tipo = $_POST['Tipo'];
        $Uso = $_POST['Uso'];
        $Puerta = $_POST['Puerta'];
        $Asiento = $_POST['Asiento'];
        $Combustible = $_POST['Combustible'];
        $Transmision = $_POST['Transmision'];
        $NoMotor = $_POST['NoMotor'];

        print("Número de Serie: ".$NoSerie."<br>");
        print("Placa: ".$Placa."<br>");
        print("Tipo de Servicio: ".$T_Servicio."<br>");
        print("Marca: ".$Marca."<br>");
        print("Modelo: ".$Modelo."<br>");
        print("Origen: ".$Origen."<br>");
        print("Color: ".$Color."<br>");
        print("Cilindraje: ".$Cilindraje."<br>");
        print("Capacidad: ".$Capacidad."<br>");
        print("Clase: ".$Clase."<br>");
        print("Tipo: ".$Tipo."<br>");
        print("Uso: ".$Uso."<br>");
        print("Puerta: ".$Puerta."<br>");
        print("Asiento: ".$Asiento."<br>");
        print("Combustible: ".$Combustible."<br>");
        print("Transmisión: ".$Transmision."<br>");
        print("Número de Motor: ".$NoMotor."<br>");

        $SQL = "INSERT INTO Vehiculos VALUES ('','$NoSerie','$Placa','$T_Servicio','$Marca','$Modelo','$Origen','$Color','$Cilindraje','$Capacidad','$Clase','$Tipo','$Uso','$Puerta','$Asiento','$Combustible','$Transmision','$NoMotor');";

        include("Controlador.php");
        $Con = Conectar();
        $Resultset = Ejecutar($Con, $SQL);
        if($Resultset == 1){
            print("Registro Insertado");
        }else{
            print("Registro no Insertado");
        }
        Desconectar($Con);
    }else{
        header('location: Login.php');
    }
?>