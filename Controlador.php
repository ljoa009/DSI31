<?php

    Function Conectar(){
        $Servidor = "127.0.0.1";
        $Usuario = "root";
        $Password = "";
        $BD = "controlvehicular31";

        $Con = mysqli_connect($Servidor, $Usuario, $Password, $BD);
        return $Con;
    }

    Function Ejecutar($Con, $SQL){
        $Resultset = mysqli_query($Con, $SQL);
        return $Resultset;
    }

    Function Procesar(){}

    Function Desconectar($Con){
        $r = mysqli_close($Con);
        return $r;
    }
?>