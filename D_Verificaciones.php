<?php
    session_start();
    if(isset($_SESSION['user'])){
        //Obtener datos
        $IdVerificacion=$_POST['IdVerificacion'];

        //Formando instrucción SQL
        $SQL= "DELETE FROM VERIFICACIONES WHERE id ='$IdVerificacion'";

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