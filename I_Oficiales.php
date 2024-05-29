<?php
    if(isset($_SESSION['user'])){
        $Nombre = $_REQUEST['Nombre'];
        $Apellido = $_REQUEST['Apellido'];
        $Firma = $_REQUEST['Firma'];
        $G_R_A = $_REQUEST['G_R_A'];

        print("Nombre: ".$Nombre."<br>");
        print("Apellido: ".$Apellido."<br>");
        print("Firma: ".$Firma."<br>");
        print("Grupo/Región/Asignación: ".$G_R_A."<br>");

        $SQL = "INSERT INTO Oficiales (Nombre, Apellido, Firma, G_R_A)VALUES('$Nombre','$Apellido','$Firma','$G_R_A');";

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