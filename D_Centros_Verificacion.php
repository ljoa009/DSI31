<?php
    //Obtener datos
    $IdCentroVerificacion=$_POST['IdCentroVerificacion'];

    //Formando instrucción SQL
    $SQL= "DELETE FROM CENTROS_VERIFICACION WHERE id ='$IdCentroVerificacion'";

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