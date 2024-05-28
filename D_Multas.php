<?php
    //Obtener datos
    $IdMulta=$_POST['IdMulta'];

    //Formando instrucción SQL
    $SQL= "DELETE FROM MULTAS WHERE id ='$IdMulta'";

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