<?php
    //Obtener datos
    $IdTenencia=$_POST['IdTenencia'];

    //Formando instrucción SQL
    $SQL= "DELETE FROM TENENCIAS WHERE id ='$IdTenencia'";

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