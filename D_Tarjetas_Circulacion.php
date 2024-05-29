<?php
    if(isset($_SESSION['user'])){
        //Obtener datos
        $IdTarjetaCirculacion=$_POST['IdTarjetaCirculacion'];

        //Formando instrucción SQL
        $SQL= "DELETE FROM TARJETAS_CIRCULACION WHERE id ='$IdTarjetaCirculacion'";

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