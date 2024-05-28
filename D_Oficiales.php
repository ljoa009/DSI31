<?php
    //Obtener datos
    $IdOficial=$_POST['IdOficial'];

    //Formando instrucción SQL
    $SQL= "DELETE FROM OFICIALES WHERE id ='$IdOficial'";

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