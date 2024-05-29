<?php
    if(isset($_SESSION['user'])){
        //Obtener datos
        $IdLicencia=$_POST['IdLicencia'];

        //Formando instrucción SQL
        $SQL= "DELETE FROM LICENCIAS WHERE id ='$IdLicencia'";

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
    }else{
        header('location: Login.php');
    }
?>