<?php
    session_start();
    if(isset($_SESSION['user'])){
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
    }else{
        header('location: Login.php');
    }
?>