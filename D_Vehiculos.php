<?php
    //Obtener datos
    $IdVehiculo=$_POST['IdVehiculo'];

    //Formando instrucción SQL
    $SQL= "DELETE FROM VEHICULOS WHERE id ='$IdVehiculo'";

    //Enviar consulta al SMDB
    include("Controlador.php");
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $SQL);
    Desconectar($Con);

    if($ResultSet==1){
        print("Registro Eliminado");
    }else{
        print("Registro No Eliminado");
    }
?>