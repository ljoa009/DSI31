<?php
    //Obtener datos
    $IdConductor=$_POST['IdConductor'];

    //Formando instrucción SQL
    $SQL= "DELETE FROM CONDUCTORES WHERE id ='$IdConductor'";

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