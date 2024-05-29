<?php
    session_start();
    if(isset($_SESSION['user'])){
        $Nombre=$_GET['Nombre'];
        $Apellido=$_GET['Apellido'];
        $RFC=$_GET['RFC'];
        $Sexo=$_GET['Sexo'];
        $EdoProcedencia=$_GET['EdoProcedencia'];
        $Direccion=$_GET['Direccion'];

        print("Nombre: ".$Nombre."<br>");
        print("Apellido: ".$Apellido."<br>");
        print("RFC: ".$RFC."<br>");
        print("Sexo: ".$Sexo."<br>");
        print("Estado de Procedencia: ".$EdoProcedencia."<br>");
        print("Dirección: ".$Direccion."<br>");

        $SQL = "INSERT INTO Propietarios (Nombre, Apellido, RFC, Sexo, EdoProcedencia, Direccion)VALUES('$Nombre','$Apellido','$RFC','$Sexo','$EdoProcedencia','$Direccion');";

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