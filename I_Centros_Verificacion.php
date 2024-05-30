<?php
    session_start();
    if(isset($_SESSION['user'])){
        $RazonSocial = $_POST['RazonSocial'];
        $Nombre = $_POST['Nombre'];
        $Telefono = $_POST['Telefono'];
        $Direccion = $_POST['Direccion'];

        print("Razón Social: ".$RazonSocial."<br>");
        print("Nombre: ".$Nombre."<br>");
        print("Teléfono: ".$Telefono."<br>");
        print("Dirección: ".$Direccion."<br>");

        $SQL = "INSERT INTO Centros_Verificacion (RazonSocial, Nombre, Telefono, Direccion)VALUES('$RazonSocial','$Nombre','$Telefono','$Direccion');";
    
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
