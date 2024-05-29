<?php
  function Conectar(){
    $Servidor = "127.0.0.1";
    $Usuario = "root";
    $Password = "";
    $BD = "controvehicularfinal";
    $Con = mysqli_connect($Servidor,$Usuario,$Password,$BD);
    return $Con;
  }
  function Ejecutar($Con,$SQL){
    $resultset=mysqli_query($Con,$SQL);
    return $resultset;
  }
  function Procesar(){}
  function Desconectar($Con){
    $r=mysqli_close($Con);
    return $r;
  }
?>