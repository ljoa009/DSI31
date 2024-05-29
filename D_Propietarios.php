<?php
    if(isset($_SESSION['user'])){
        //Obtener datos
        $IdPropietario=$_POST['IdPropietario'];

        //Formando instrucción SQL
        $SQL= "DELETE FROM PROPIETARIOS WHERE id ='$IdPropietario'";

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